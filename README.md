# ios-build

This class add a class wrapper around [daverandom/exceptional-json](https://github.com/DaveRandom/ExceptionalJSON) to make mocking easier.

[![Latest Stable Version](https://poser.pugx.org/mimmi20/ios-build/v/stable?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)
[![Latest Unstable Version](https://poser.pugx.org/mimmi20/ios-build/v/unstable?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)
[![License](https://poser.pugx.org/mimmi20/ios-build/license?format=flat-square)](https://packagist.org/packages/mimmi20/ios-build)

## Code Status

[![Build Status](https://travis-ci.org/mimmi20/ios-build.svg?branch=master)](https://travis-ci.org/mimmi20/ios-build)
[![codecov](https://codecov.io/gh/mimmi20/ios-build/branch/master/graph/badge.svg)](https://codecov.io/gh/mimmi20/ios-build)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/mimmi20/ios-build.svg)](http://isitmaintained.com/project/mimmi20/ios-build "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/mimmi20/ios-build.svg)](http://isitmaintained.com/project/mimmi20/ios-build "Percentage of issues still open")


## Requirements

This library requires PHP 7.1+.

## Installation

Run the command below to install via Composer

```shell
composer require mimmi20/ios-build
```

## Usage

```php
$json    = new \IosBuild\Json();
$decoded = $json->decode();
```

See also [daverandom/exceptional-json's decomantation](https://raw.githubusercontent.com/DaveRandom/ExceptionalJSON/master/readme.md)

## Issues and feature requests

Please report your issues and ask for new features on the GitHub Issue Tracker
at https://github.com/mimmi20/ios-build/issues
