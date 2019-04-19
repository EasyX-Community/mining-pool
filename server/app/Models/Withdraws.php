<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $market
 * @property string $address
 * @property float $amount
 * @property int $time
 * @property string $uuid
 */
class Withdraws extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['market', 'address', 'amount', 'time', 'uuid'];

}
