<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $time
 * @property float $profit
 * @property float $wallet
 * @property float $wallets
 * @property float $immature
 * @property float $margin
 * @property float $waiting
 * @property float $balances
 * @property float $onsell
 * @property float $renters
 */
class Stat extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['time', 'profit', 'wallet', 'wallets', 'immature', 'margin', 'waiting', 'balances', 'onsell', 'renters'];

}
