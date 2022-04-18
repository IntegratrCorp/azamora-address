<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Integratrcorp\AzamoraAddress\Models\Municipality;
use Integratrcorp\AzamoraAddress\Models\Province;

class MunicipalityFactory extends Factory
{
    protected $model = Municipality::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        $province = Province::factory()->create();
        return [
            'name' => $this->faker->city,
            'code' => $this->faker->lexify('?????????'),
            'region_code' => $province->region_code,
            'province_code' => $province->code,
            'has_sub' => rand(0, 1),
        ];
    }
}
