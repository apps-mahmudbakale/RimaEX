<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'commodity_id',
        'security_qty'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function getSecuritiesValue()
    {
        return $this->commodity->cuurnt_price * $this->security_qty;
    }
}
