<?php

namespace Integratrcorp\AzamoraAddress\Http\Controllers;

use Integratrcorp\AzamoraAddress\Http\Controllers\Controller;
use Integratrcorp\AzamoraAddress\Http\Resources\Barangay as ResourcesBarangay;
use Integratrcorp\AzamoraAddress\Models\Barangay;
use Illuminate\Http\Resources\Json\JsonResource;

class BarangayController extends Controller
{
    /**
     * List
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $q = $this->getQuery();

        $regions = Barangay::name($q)
            ->paginate($this->getPerPage());

        return ResourcesBarangay::collection($regions);
    }
}