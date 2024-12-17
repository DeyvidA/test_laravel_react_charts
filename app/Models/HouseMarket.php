<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HouseMarket extends Model
{
    protected $fillable = [
        'name',
        'address',
    ];



    // hasMany relationship with HousePricing
    public function housePricings(): HasMany
    {
        return $this->hasMany(HousePricing::class);
    }

}
