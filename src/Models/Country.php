<?php

namespace Integratrcorp\AzamoraAddress\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Integratrcorp\AzamoraAddress\Factories\CountryFactory;
use Integratrcorp\AzamoraAddress\Models\Traits\Address;

class Country extends Model
{
    use Address;
    use HasFactory;

    /**
     * Factory
     *
     * @return Factory
     */
    protected static function newFactory(): Factory
    {
        return new CountryFactory();
    }

    protected $table = 'countries';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;
}
