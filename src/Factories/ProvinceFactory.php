<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Integratrcorp\AzamoraAddress\Models\Province;
use Integratrcorp\AzamoraAddress\Models\Region;

class ProvinceFactory extends Factory
{
    protected $model = Province::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'code' => $this->faker->lexify('?????????'),
            'region_code' => Region::factory(),
        ];
    }
}
