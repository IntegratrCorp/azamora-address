<?php

namespace Integratrcorp\AzamoraAddress\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Country extends JsonResource
{
    /**
     * @inheritDoc
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'logo' => $this->logo,
            'name' => $this->name
        ];
    }
}
