<?php
/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2020, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace IosBuild;

use peterkahl\iOSbuild\iOSbuild as PeterIos;

final class IosBuild implements IosBuildInterface
{
    /**
     * Takes iOS build code and returns corresponding iOS version.
     *
     * @param string $needle the build code
     *
     * @throws BuildException
     * @throws NotFoundException
     *
     * @return string JSON encoded string
     */
    public function getVersion(string $needle): string
    {
        try {
            $version = PeterIos::getVersion($needle);
            // @codeCoverageIgnoreStart
        } catch (\Throwable $e) {
            throw new BuildException('An error occured while detection the version', 0, $e);
            // @codeCoverageIgnoreEnd
        }

        if (null === $version || false === $version) {
            throw new NotFoundException('Could not detect the version from the build');
        }

        return $version;
    }
}
