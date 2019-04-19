<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $coin_id
 * @property int $blockid
 * @property int $create_time
 * @property float $amount
 * @property float $price
 * @property int $status
 * @property int $mature_time
 */
class Earning extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'coin_id', 'blockid', 'create_time', 'amount', 'price', 'status', 'mature_time'];

}
