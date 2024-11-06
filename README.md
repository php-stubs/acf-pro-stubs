# ACF Pro Stubs

It provides stub declarations for [ACF Pro](https://advancedcustomfields.com/)
core functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools
like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated from `wpengine/advanced-custom-fields-pro`
using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP ^8.0

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/acf-pro-stubs
```

Alternatively you may download `acf-pro-stubs.php` directly.

## Versioning

This package is versioned to match the ACF Pro version from which the stubs are generated.

## Updating stubs

1. Run modern PHP version
2. Clone this repository and `cd` into it
3. Insert your ACF Pro license to auth.json in the project root
4. Run `composer install`
5. Install operating system level packages `apt-get install xmlstarlet unzip git`
6. Run `./release-latest-versions.sh`

This will update `acf-pro-stubs.php` per version, tag and commit it.
