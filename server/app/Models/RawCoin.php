<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property boolean $active
 */
class RawCoin extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rawcoins';

    /**
     * @var array
     */
    protected $fillable = ['name', 'symbol', 'active'];

}
