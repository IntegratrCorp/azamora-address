<?php

namespace Integratrcorp\AzamoraAddress\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Integratrcorp\AzamoraAddress\Models\Barangay;
use Integratrcorp\AzamoraAddress\Models\SubMunicipality;

class BarangayFactory extends Factory
{
    protected $model = Barangay::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        $subMunicipality = SubMunicipality::factory()->create();

        return [
            'name' => $this->faker->city,
            'code' => $this->faker->lexify('?????????'),
            'region_code' => $subMunicipality->region_code,
            'province_code' => $subMunicipality->province_code,
            'municipality_code' => $subMunicipality->municipality_code,
            'sub_municipality_code' => $subMunicipality->code,
        ];
    }
}
