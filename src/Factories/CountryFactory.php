<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Integratrcorp\AzamoraAddress\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'code' => $this->faker->countryCode,
        ];
    }
}
