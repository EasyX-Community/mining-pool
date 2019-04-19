<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coin_id
 * @property int $last_earning
 * @property boolean $is_locked
 * @property boolean $no_fees
 * @property boolean $donation
 * @property boolean $logtraffic
 * @property float $balance
 * @property string $username
 * @property string $coinsymbol
 * @property int $swap_time
 * @property string $login
 * @property string $hostaddr
 * @property Payout[] $payouts
 */
class Account extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['coin_id', 'last_earning', 'is_locked', 'no_fees', 'donation', 'logtraffic', 'balance', 'username', 'coinsymbol', 'swap_time', 'login', 'hostaddr'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payouts()
    {
        return $this->hasMany('App\Models\Payout');
    }
}
