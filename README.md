# Nova Laravel Update Card

[![Latest Version on Packagist](https://img.shields.io/packagist/v/beyondcode/nova-laravel-update-card.svg?style=flat-square)](https://packagist.org/packages/beyondcode/nova-laravel-update-card)
[![Total Downloads](https://img.shields.io/packagist/dt/beyondcode/nova-laravel-update-card.svg?style=flat-square)](https://packagist.org/packages/beyondcode/nova-laravel-update-card)

Check if you're running the latest Laravel version right from your Nova dashboard. 

![tinker screenshot](https://beyondco.de/github/nova-laravel-update-card/screenshot.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require beyondcode/nova-laravel-update-card
```

Next up, you must register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...
public function cards()
{
    return [
        // ...
        new \Beyondcode\LaravelUpdateCard\LaravelUpdateCard(),
    ];
}
```

## Usage

Just visit your Nova dashboard and you'll get information about whether or not you're running the latest stable Laravel version. 

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email marcel@beyondco.de instead of using the issue tracker.

## Credits

- [Marcel Pociot](https://github.com/mpociot)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
