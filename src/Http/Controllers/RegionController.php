<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Province;
use Integratrcorp\AzamoraAddress\Http\Resources\Region as ResourcesRegion;
use Integratrcorp\AzamoraAddress\Models\Region;
use Illuminate\Http\Resources\Json\JsonResource;

class RegionController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = Region::name($q)
            ->paginate($this->getPerPage());

        return ResourcesRegion::collection($regions);
    }

    /**
     * Provinces
     *
     * @param string $regionCode
     *
     * @return JsonResource
     */
    public function province(string $regionCode): JsonResource
    {
        $q = $this->getQuery();

        $provinces = Region::findOrFail($regionCode)
            ->provinces()
            ->name($q)
            ->paginate($this->getPerPage());

        return Province::collection($provinces);
    }
}
