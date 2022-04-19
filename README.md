# Laravel Ph Address with countries

Package service for Address api.

## Getting Started

Add this to your project composer.json file.

``` json
    "require": {
        "integratrcorp/azamora-address": "^1.0"
    }

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/IntegratrCorp/azamora-address"
        }
    ]
```

## Run this to your project file after adding.

``` shell
$   composer update
$   php artisan migrate --path=vendor/integratrcorp/azamora-address/database/migrations 
$   php artisan db:seed
```