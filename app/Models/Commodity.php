<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'current_price',
        'old_price',
        'ware_house_id',
        'commodity_code'
    ];

    public function getCommodityPriceChange()
    {
        return $this->current_price - $this->old_price;
    }

    public function getCommodityPriceChangePercentage()
    {
        return ($this->current_price - $this->old_price) / $this->current_price * 100;
    }

    public function getCommodityPriceChangePercentageFormatted()
    {
        return number_format($this->getCommodityPriceChangePercentage(), 2) . '%';
    }

    public function security(){

        return $this->hasMany(Security::class);
    } 

    public function wareHouse(){

        return $this->belongsTo(WareHouse::class);
    }
    
}
