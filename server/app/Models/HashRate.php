<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $time
 * @property integer $hashrate
 * @property integer $hashrate_bad
 * @property float $price
 * @property float $rent
 * @property float $earnings
 * @property float $difficulty
 * @property string $algo
 * @property string $created_at
 * @property string $updated_at
 */
class HashRate extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hashrate';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['time', 'hashrate', 'hashrate_bad', 'price', 'rent', 'earnings', 'difficulty', 'algo', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function algorithm()
    {
        return $this->belongsTo('App\Models\Algo', 'algo', 'name');
    } 
}
