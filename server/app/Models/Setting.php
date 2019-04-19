<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $param
 * @property string $value
 * @property string $type
 */
class Setting extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'param';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['value', 'type'];

}
