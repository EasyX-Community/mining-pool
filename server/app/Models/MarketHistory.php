<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coin_id
 * @property int $market_id
 * @property int $time
 * @property float $price
 * @property float $price2
 * @property float $balance
 * @property Coin $coin
 * @property Market $market
 */
class MarketHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'market_history';

    /**
     * @var array
     */
    protected $fillable = ['coin_id', 'market_id', 'time', 'price', 'price2', 'balance'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coin()
    {
        return $this->belongsTo('App\Models\Coin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function market()
    {
        return $this->belongsTo('App\Models\Market', 'market_id');
    }
}
