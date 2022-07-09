# Laravel Blade Schema Builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/danielspravtsev/laravel-blade-schema.svg?style=flat-square)](https://packagist.org/packages/danielspravtsev/laravel-blade-schema)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/danielspravtsev/laravel-blade-schema/run-tests?label=tests)](https://github.com/danielspravtsev/laravel-blade-schema/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/danielspravtsev/laravel-blade-schema/Check%20&%20fix%20styling?label=code%20style)](https://github.com/danielspravtsev/laravel-blade-schema/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/danielspravtsev/laravel-blade-schema.svg?style=flat-square)](https://packagist.org/packages/danielspravtsev/laravel-blade-schema)

Build your HTML inside a PHP component 

## Installation

You can install the package via composer:

```bash
composer require danielspravtsev/laravel-blade-schema
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-blade-schema-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-blade-schema-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-blade-schema-views"
```

## Usage

```php
$bladeSchema = new DanielSpravtsev\BladeSchema();
echo $bladeSchema->echoPhrase('Hello, DanielSpravtsev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/DanielSpravtsev/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Spravtsev](https://github.com/DanielSpravtsev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
