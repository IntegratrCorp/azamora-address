<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Barangay;
use Integratrcorp\AzamoraAddress\Http\Resources\Municipality as ResourcesMunicipality;
use Integratrcorp\AzamoraAddress\Http\Resources\SubMunicipality;
use Integratrcorp\AzamoraAddress\Models\Municipality;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipalityController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = Municipality::name($q)
            ->paginate($this->getPerPage());

        return ResourcesMunicipality::collection($regions);
    }

    /**
     * Sub Municipalities
     *
     * @param string $municipalityCode
     *
     * @return JsonResource
     */
    public function subMunicipality(string $municipalityCode): JsonResource
    {
        $q = $this->getQuery();

        $barangays = Municipality::findOrFail($municipalityCode)
            ->subMunicipalities()
            ->name($q)
            ->paginate($this->getPerPage());

        return SubMunicipality::collection($barangays);
    }

    /**
     * Barangays
     *
     * @param string $municipalityCode
     *
     * @return JsonResource
     */
    public function barangay(string $municipalityCode): JsonResource
    {
        $q = $this->getQuery();

        $barangays = Municipality::findOrFail($municipalityCode)
            ->barangays()
            ->name($q)
            ->paginate($this->getPerPage());

        return Barangay::collection($barangays);
    }
}
