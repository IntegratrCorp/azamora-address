<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Integratrcorp\AzamoraAddress\Models\Municipality;
use Integratrcorp\AzamoraAddress\Models\SubMunicipality;

class SubMunicipalityFactory extends Factory
{
    protected $model = SubMunicipality::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        $municipality = Municipality::factory()->create();
        return [
            'name' => $this->faker->city,
            'code' => $this->faker->lexify('?????????'),
            'region_code' => $municipality->region_code,
            'province_code' => $municipality->province_code,
            'municipality_code' => $municipality->code,
        ];
    }
}