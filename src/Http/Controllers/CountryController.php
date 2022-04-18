<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Country as ResourcesCountry;
use Integratrcorp\AzamoraAddress\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = Country::name($q)
            ->paginate($this->getPerPage());

        return ResourcesCountry::collection($regions);
    }
}