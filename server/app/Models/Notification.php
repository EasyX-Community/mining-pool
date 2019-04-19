<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $enabled
 * @property string $description
 * @property string $conditiontype
 * @property float $conditionvalue
 * @property string $notifytype
 * @property string $notifycmd
 * @property int $lastchecked
 * @property int $lasttriggered
 * @property string $created_at
 * @property string $updated_at
 * @property Coin $coin
 */
class Notification extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['enabled', 'description', 'conditiontype', 'conditionvalue', 'notifytype', 'notifycmd', 'lastchecked', 'lasttriggered', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coin()
    {
        return $this->belongsTo('App\\Models\\Coin');
    }
}
