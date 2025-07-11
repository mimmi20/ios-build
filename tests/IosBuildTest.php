<?php

/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace IosBuildTest;

use IosBuild\Exception\NotFoundException;
use IosBuild\IosBuild;
use IosBuild\IosData;
use Override;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

use function array_keys;
use function is_numeric;
use function mb_substr;
use function sprintf;

final class IosBuildTest extends TestCase
{
    private IosBuild $object;

    /** @throws void */
    #[Override]
    protected function setUp(): void
    {
        $this->object = new IosBuild();
    }

    /** @throws NotFoundException */
    #[DataProvider('failVersionDataProvider')]
    public function testGetVersionFail(string $buildCode): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode),
        );

        $this->object->getVersion($buildCode);
    }

    /**
     * @return array<int, array<int, string>>
     *
     * @throws void
     */
    public static function failVersionDataProvider(): array
    {
        $data = [
            ['\'x\': \'123\''],
            ['a16G5038d2'],
            ['a16G5038d'],
            ['16G5038d2'],
        ];

        foreach (array_keys(IosData::VERSIONS) as $code) {
            if (is_numeric(mb_substr($code, -1))) {
                continue;
            }

            $data[] = [$code . 'd'];
        }

        return $data;
    }

    /**
     * @throws ExpectationFailedException
     * @throws NotFoundException
     */
    #[DataProvider('versionDataProvider')]
    public function testGetVersion(string $buildCode, string $expected): void
    {
        self::assertSame($expected, $this->object->getVersion($buildCode));
    }

    /**
     * @return array<int, array<int, string>>
     *
     * @throws void
     */
    public static function versionDataProvider(): array
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
            [
                '18G5042d',
                '14.7b3',
            ],
            [
                '18G5042',
                '14.7b3',
            ],
            [
                '18G5043',
                '14.7b3',
            ],
            [
                '18G5041',
                '14.7b2',
            ],
        ];

        foreach (IosData::VERSIONS as $code => $version) {
            $data[] = [$code, $version];

            if (!is_numeric(mb_substr($code, -1))) {
                continue;
            }

            $data[] = [$code . 'd', $version];
        }

        return $data;
    }
}
