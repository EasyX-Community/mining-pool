<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property float $usdbtc
 * @property int $last_monitor_exchange
 * @property int $last_update_price
 * @property int $last_payout
 * @property string $stratumids
 * @property string $best_algo
 */
class Mining extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mining';

    /**
     * @var array
     */
    protected $fillable = ['usdbtc', 'last_monitor_exchange', 'last_update_price', 'last_payout', 'stratumids', 'best_algo'];

}
