<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coin_id
 * @property int $created
 * @property float $amount
 * @property float $price
 * @property float $ask
 * @property float $bid
 * @property string $market
 * @property string $uuid
 */
class Order extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['coin_id', 'created', 'amount', 'price', 'ask', 'bid', 'market', 'uuid'];

}
