# Laravel Ecuador Locations

[![Latest Version on Packagist](https://img.shields.io/packagist/v/luilliarcec/laravel-ecuador-locations.svg)](https://packagist.org/packages/luilliarcec/laravel-ecuador-locations)
[![Total Downloads](https://img.shields.io/packagist/dt/luilliarcec/laravel-ecuador-locations)](https://packagist.org/packages/luilliarcec/laravel-ecuador-locations)
[![GitHub license](https://img.shields.io/github/license/luilliarcec/laravel-ecuador-locations.svg)](https://github.com/luilliarcec/laravel-ecuador-locations/blob/master/LICENSE.md)

## Installation

You can install the package via composer:

```bash
composer require luilliarcec/laravel-ecuador-locations
```

Now publish the migration file into your app's migrations directory, by running the following command:

```bash
php artisan vendor:publish --provider="Luilliarcec\EcuadorLocations\EcuadorLocationsServiceProvider"
```

```bash
php artisan migrate
```

### Usage

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Luilliarcec\EcuadorLocations\Seeders\CantonSeeder;
use Luilliarcec\EcuadorLocations\Seeders\ProvinciaSeeder;
use Luilliarcec\EcuadorLocations\Models\Canton;
use Luilliarcec\EcuadorLocations\Models\Provincia;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        if (Provincia::doesntExist()) {
            $this->call(ProvinciaSeeder::class);
        }

        if (Canton::doesntExist()) {
            $this->call(CantonSeeder::class);
        }

        // ...
    }
}
```

```bash
php artisan db:seed
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email luilliarcec@gmail.com instead of using the issue tracker.

## Credits

- [Luis Andrés Arce C.](https://github.com/luilliarcec)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
