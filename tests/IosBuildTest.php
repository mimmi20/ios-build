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

namespace IosBuildTest;

use IosBuild\BuildException;
use IosBuild\IosBuild;
use IosBuild\NotFoundException;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

final class IosBuildTest extends TestCase
{
    private IosBuild $object;

    protected function setUp(): void
    {
        $this->object = new IosBuild();
    }

    /**
     * @throws NotFoundException
     * @throws BuildException
     */
    public function testGetVersionFail(): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage('Could not detect the version from the build');

        $this->object->getVersion('\'x\': \'123\'');
    }

    /**
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     * @throws BuildException
     * @throws NotFoundException
     */
    public function testGetVersion(): void
    {
        self::assertSame('12.4b3', $this->object->getVersion('16G5038d'));
        self::assertSame('14.3b1', $this->object->getVersion('18C5044'));
        self::assertSame('13.6b1', $this->object->getVersion('17G5044'));
    }
}
