<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Municipality;
use Integratrcorp\AzamoraAddress\Http\Resources\Province as ResourcesProvince;
use Integratrcorp\AzamoraAddress\Models\Province;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = Province::name($q)
            ->paginate($this->getPerPage());

        return ResourcesProvince::collection($regions);
    }

    /**
     * Municipalities
     *
     * @param string $provinceCode
     *
     * @return JsonResource
     */
    public function municipality(string $provinceCode): JsonResource
    {
        $q = $this->getQuery();

        $municipalities = Province::findOrFail($provinceCode)
            ->municipalities()
            ->name($q)
            ->paginate($this->getPerPage());

        return Municipality::collection($municipalities);
    }
}
