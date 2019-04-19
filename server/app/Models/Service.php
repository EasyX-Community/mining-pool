<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $algo
 * @property float $price
 * @property integer $speed
 * @property float $custom_balance
 * @property float $custom_accept
 * @property float $custom_reject
 */
class Service extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'algo', 'price', 'speed', 'custom_balance', 'custom_accept', 'custom_reject'];

}
