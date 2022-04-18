<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Barangay;
use Integratrcorp\AzamoraAddress\Http\Resources\SubMunicipality as ResourcesSubMunicipality;
use Integratrcorp\AzamoraAddress\Models\SubMunicipality;
use Illuminate\Http\Resources\Json\JsonResource;

class SubMunicipalityController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = SubMunicipality::name($q)
            ->paginate($this->getPerPage());

        return ResourcesSubMunicipality::collection($regions);
    }

    /**
     * Barangays
     *
     * @param string $subMunicipalityCode
     *
     * @return JsonResource
     */
    public function barangay(string $subMunicipalityCode): JsonResource
    {
        $q = $this->getQuery();

        $barangays = SubMunicipality::findOrFail($subMunicipalityCode)
            ->barangays()
            ->name($q)
            ->paginate($this->getPerPage());

        return Barangay::collection($barangays);
    }
}
