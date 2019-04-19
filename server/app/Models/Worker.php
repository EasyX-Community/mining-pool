<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $time
 * @property int $pid
 * @property boolean $subscribe
 * @property float $difficulty
 * @property string $ip
 * @property string $dns
 * @property string $name
 * @property string $nonce1
 * @property string $version
 * @property string $password
 * @property string $worker
 * @property string $algo
 */
class Worker extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'time', 'pid', 'subscribe', 'difficulty', 'ip', 'dns', 'name', 'nonce1', 'version', 'password', 'worker', 'algo'];
    
    /**
     * Algorithm property identified by the name.
     */
    public function algorithm() {
        return $this->belongsTo('App\Models\Algo', 'algo', 'name');
    }
}
