<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $user
 * @property string $host
 * @property string $db
 * @property int $created
 * @property int $idle
 * @property int $last
 */
class Connection extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['user', 'host', 'db', 'created', 'idle', 'last'];

}
