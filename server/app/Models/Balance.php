<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property float $balance
 * @property float $onsell
 */
class Balance extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'balance', 'onsell'];

}
