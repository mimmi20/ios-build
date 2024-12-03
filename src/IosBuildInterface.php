<?php

/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace IosBuild;

use IosBuild\Exception\NotFoundException;

interface IosBuildInterface
{
    /**
     * Takes iOS build code and returns corresponding iOS version.
     *
     * @param string $buildCode the build code
     *
     * @throws NotFoundException
     */
    public function getVersion(string $buildCode): string;
}
