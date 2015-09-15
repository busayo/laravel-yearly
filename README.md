# laravel-yearly

[![Latest Version on Packagist](https://img.shields.io/packagist/dt/busayo/laravel-yearly.svg?style=flat-square)](https://github.com/busayo/laravel-yearly/releases)
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://img.shields.io/travis/busayo/laravel-yearly.svg)](https://travis-ci.org/spatie/laravel-yearly)
[![Quality Score](https://img.shields.io/scrutinizer/g/busayo/laravel-yearly.svg?style=flat-square)](https://scrutinizer-ci.com/g/busayo/laravel-yearly)
[![Total Downloads](https://img.shields.io/packagist/dt/busayo/laravel-yearly.svg?style=flat-square)](https://packagist.org/packages/busayo/laravel-yearly)

This package helps you to keep your copyright year up-to-date. Simple but insanely useful.

## Install

Via Composer

``` bash
$ composer require busayo/laravel-yearly
```
Add this to your providers array in `config/app.php`

```php

// Laravel 5: config/app.php

'providers' => [
    ...
    'Busayo\Yearly\YearlyServiceProvider',
    ...
];
```

This package also comes with a facade

```php

// Laravel 5: config/app.php

'aliases' => [
    ...
    'Yearly' => 'Busayo\Yearly\YearlyFacade',
    ...
]
```

## Usage

Use it in your views, preferably in your footer section like this:

``` php

{{ Yearly::current_year() }}  // returns 2015 ( This is the current year presently )

{{ Yearly::year_range(2002) }} // returns 2002 - 2015

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

You can run the tests with:

```bash
vendor/bin/phpunit run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Prosper Otemuyiwa](https://twitter.com/unicodeveloper)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/league/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thephpleague/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thephpleague/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/league/:package_name
[link-travis]: https://travis-ci.org/thephpleague/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/thephpleague/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/thephpleague/:package_name
[link-downloads]: https://packagist.org/packages/league/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
