<?php
/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2021, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace IosBuild;

use function array_key_exists;
use function array_keys;
use function array_values;
use function count;
use function preg_match;
use function sprintf;

final class IosBuild implements IosBuildInterface
{
    /**
     * Takes iOS build code and returns corresponding iOS version.
     *
     * @param string $buildCode the build code
     *
     * @throws BuildException
     * @throws NotFoundException
     */
    public function getVersion(string $buildCode): string
    {
        if (array_key_exists($buildCode, IosData::VERSIONS)) {
            return IosData::VERSIONS[$buildCode];
        }

        $builds    = array_keys(IosData::VERSIONS);
        $versions  = array_values(IosData::VERSIONS);
        $candidate = false;

        if (preg_match('/^(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?P<buildCode>\d+)([a-z])?$/', $buildCode, $matchNeedle)) {
            // Walk backwards
            $count = count($builds);

            for ($key = $count - 1; 0 <= $key; --$key) {
                preg_match('/^(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?P<buildCode>\d+)([a-z])?$/', $builds[$key], $matchCode);

                if ($matchCode['primaryCode'] . $matchCode['secondaryCode'] . $matchCode['buildCode'] === $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode'] . $matchNeedle['buildCode']) {
                    return $versions[$key];
                }

                if ($matchCode['primaryCode'] . $matchCode['secondaryCode'] !== $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode'] || $matchNeedle['buildCode'] <= $matchCode['buildCode']) {
                    continue;
                }

                $candidate = $versions[$key];
            }
        }

        if (false !== $candidate) {
            return $candidate;
        }

        throw new NotFoundException(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode)
        );
    }
}
