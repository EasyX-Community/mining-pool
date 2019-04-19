<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coin_id
 * @property string $label
 * @property string $address
 * @property int $last_used
 * @property Coin $coin
 */
class Bookmark extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['coin_id', 'label', 'address', 'last_used'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coin()
    {
        return $this->belongsTo('App\Models\Coin');
    }
}
