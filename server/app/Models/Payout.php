<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $account_id
 * @property int $coin_id
 * @property int $time
 * @property boolean $completed
 * @property float $amount
 * @property float $fee
 * @property string $tx
 * @property string $memoid
 * @property string $errmsg
 * @property Account $account
 * @property Coin $coin
 */
class Payout extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['account_id', 'coin_id', 'time', 'completed', 'amount', 'fee', 'tx', 'memoid', 'errmsg'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coin()
    {
        return $this->belongsTo('App\Models\Coin');
    }
}
