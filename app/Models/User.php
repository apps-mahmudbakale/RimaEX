<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'occupation',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getWalletBalance()
    {
        return $this->wallets->sum('cash_balance');
    }

    public function getLienBalance()
    {
        return $this->wallets->sum('lien_balance');
    }

    public function getWalletAccountNumber()
    {
        return $this->wallets->first()->account_number;
    }

    public function getOrdersCount()
    {
        return $this->orders->count();
    }

    public function securities()
    {
        return $this->hasMany(Security::class);
    }
 

    public function mySecurities()
    {
        return $this->securities->pluck('commodity_id');
    }

}
