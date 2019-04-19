<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $pid
 * @property int $time
 * @property int $started
 * @property string $algo
 * @property int $workers
 * @property int $port
 * @property string $symbol
 * @property string $url
 * @property int $fds
 */
class Stratum extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'stratums';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pid';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['time', 'started', 'algo', 'workers', 'port', 'symbol', 'url', 'fds'];

}
