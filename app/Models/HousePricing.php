<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HousePricing extends Model
{
    protected $fillable = [
        'house_market_id',
        'month',
        'price',
    ];

    /**
     * Get the house market that owns the pricing.
     *
     * @return BelongsTo
     */
    public function houseMarket(): BelongsTo
    {
        return $this->belongsTo(HouseMarket::class);
    }
}
