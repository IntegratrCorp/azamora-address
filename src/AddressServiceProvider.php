<?php

namespace Integratrcorp\AzamoraAddress;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Integratrcorp\AzamoraAddress\Validators\ValidBarangay;
use Integratrcorp\AzamoraAddress\Validators\ValidCountry;
use Integratrcorp\AzamoraAddress\Validators\ValidMunicipality;
use Integratrcorp\AzamoraAddress\Validators\ValidProvince;
use Integratrcorp\AzamoraAddress\Validators\ValidRegion;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function boot()
    {
        Validator::extend(
            'valid_region_code',
            ValidRegion::class . '@validate'
        );

        Validator::extend(
            'valid_province_code',
            ValidProvince::class . '@validate'
        );

        Validator::extend(
            'valid_municipality_code',
            ValidMunicipality::class . '@validate'
        );

        Validator::extend(
            'valid_barangay_code',
            ValidBarangay::class . '@validate'
        );

        Validator::extend(
            'valid_country_code',
            ValidCountry::class . '@validate'
        );
    }
}
