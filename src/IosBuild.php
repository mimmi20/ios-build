<?php

/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2026, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace IosBuild;

use IosBuild\Exception\NotFoundException;
use Override;

use function array_key_exists;
use function array_keys;
use function array_reverse;
use function array_values;
use function end;
use function ksort;
use function preg_match;
use function sprintf;

final class IosBuild implements IosBuildInterface
{
    /**
     * Takes iOS build code and returns corresponding iOS version.
     *
     * @param string $buildCode the build code
     *
     * @throws NotFoundException
     */
    #[Override]
    public function getVersion(string $buildCode): string
    {
        if (array_key_exists($buildCode, IosData::VERSIONS)) {
            return IosData::VERSIONS[$buildCode];
        }

        $builds    = array_reverse(array_keys(IosData::VERSIONS));
        $versions  = array_reverse(array_values(IosData::VERSIONS));
        $candidate = [];

        if (
            preg_match(
                '/^(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?P<buildCode>\d+)([a-z])?$/',
                $buildCode,
                $matchNeedle,
            )
        ) {
            foreach ($builds as $key => $build) {
                preg_match(
                    '/(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?P<buildCode>\d+)/',
                    $build,
                    $matchCode,
                );

                if ($matchCode['primaryCode'] . $matchCode['secondaryCode'] . $matchCode['buildCode'] === $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode'] . $matchNeedle['buildCode']) {
                    return $versions[$key];
                }

                if ($matchCode['primaryCode'] . $matchCode['secondaryCode'] !== $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode']) {
                    continue;
                }

                if ($matchNeedle['buildCode'] < $matchCode['buildCode']) {
                    continue;
                }

                $candidate[$matchCode['buildCode']] = $versions[$key];
            }
        }

        if ($candidate !== []) {
            ksort($candidate);

            return end($candidate);
        }

        throw new NotFoundException(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode),
        );
    }
}
