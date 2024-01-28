# ios-build

[![Latest Stable Version](https://poser.pugx.org/mimmi20/ios-build/v/stable?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)
[![Latest Unstable Version](https://poser.pugx.org/mimmi20/ios-build/v/unstable?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)
[![License](https://poser.pugx.org/mimmi20/ios-build/license?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)

## Code Status

[![codecov](https://codecov.io/gh/mimmi20/ios-build/branch/master/graph/badge.svg)](https://codecov.io/gh/mimmi20/ios-build)
[![Test Coverage](https://api.codeclimate.com/v1/badges/7711cad77f48ba156bad/test_coverage)](https://codeclimate.com/github/mimmi20/ios-build/test_coverage)
[![Average time to resolve an issue](https://isitmaintained.com/badge/resolution/mimmi20/ios-build.svg)](https://isitmaintained.com/project/mimmi20/ios-build "Average time to resolve an issue")
[![Percentage of issues still open](https://isitmaintained.com/badge/open/mimmi20/ios-build.svg)](https://isitmaintained.com/project/mimmi20/ios-build "Percentage of issues still open")
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fmimmi20%2Fios-build%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/mimmi20/ios-build/master)
[![Maintainability](https://api.codeclimate.com/v1/badges/7711cad77f48ba156bad/maintainability)](https://codeclimate.com/github/mimmi20/ios-build/maintainability)

## Requirements

This library requires PHP 8.1+.

## Installation

Run the command below to install via Composer

```shell
composer require mimmi20/ios-build
```

## Usage

```php
$build   = new \IosBuild\IosBuild();
$version = $build->getVersion('<the build>');
```

## Issues and feature requests

Please report your issues and ask for new features on the GitHub Issue Tracker
at <https://github.com/mimmi20/ios-build/issues>
