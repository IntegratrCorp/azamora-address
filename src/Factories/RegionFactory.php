<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Integratrcorp\AzamoraAddress\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    protected $model = Region::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'code' => $this->faker->lexify('?????????'),
        ];
    }
}
