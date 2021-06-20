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
use IosBuild\IosData;
use IosBuild\NotFoundException;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

use function sprintf;

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
     *
     * @dataProvider failVersionDataProvider
     */
    public function testGetVersionFail(string $buildCode): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode)
        );

        $this->object->getVersion($buildCode);
    }

    /**
     * @return array<int, array<int, string>>
     */
    public function failVersionDataProvider(): array
    {
        return [
            ['\'x\': \'123\''],
            ['a16G5038d2'],
        ];
    }

    /**
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     * @throws BuildException
     * @throws NotFoundException
     *
     * @dataProvider versionDataProvider
     */
    public function testGetVersion(string $buildCode, string $expected): void
    {
        self::assertSame($expected, $this->object->getVersion($buildCode));
    }

    /**
     * @return array<int, array<int, string>>
     */
    public function versionDataProvider(): array
    {
        $data = [
            [
                '16G5038d',
                '12.4b3',
            ],
            [
                '18C5044',
                '14.3b1',
            ],
            [
                '17G5044',
                '13.6b1',
            ],
        ];

        foreach (IosData::VERSIONS as $code => $version) {
            $data[] = [$code, $version];
        }

        return $data;
    }
}
