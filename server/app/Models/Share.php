<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property int $worker_id
 * @property int $coin_id
 * @property int $jobid
 * @property int $pid
 * @property int $time
 * @property int $error
 * @property boolean $valid
 * @property boolean $extranonce1
 * @property float $difficulty
 * @property float $share_diff
 * @property string $algo
 */
class Share extends Model
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
    protected $fillable = ['user_id', 'worker_id', 'coin_id', 'jobid', 'pid', 'time', 'error', 'valid', 'extranonce1', 'difficulty', 'share_diff', 'algo'];

}
