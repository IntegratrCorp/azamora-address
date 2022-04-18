<?php

namespace Integratrcorp\AzamoraAddress\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Integratrcorp\AzamoraAddress\Factories\BarangayFactory;
use Integratrcorp\AzamoraAddress\Models\Province;
use Integratrcorp\AzamoraAddress\Models\Region;
use Integratrcorp\AzamoraAddress\Models\Traits\Address;

class Barangay extends Model
{
    use Address;
    use HasFactory;

    protected $table = 'barangays';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    /**
     * Factory
     *
     * @return Factory
     */
    protected static function newFactory(): Factory
    {
        return new BarangayFactory();
    }

    /**
     * Region relationship
     *
     * @return BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * Province Relationship
     *
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Municipality relationship
     *
     * @return BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    /**
     * Sub Municipality relationship
     *
     * @return BelongsTo
     */
    public function subMunicipality(): BelongsTo
    {
        return $this->belongsTo(SubMunicipality::class);
    }
}