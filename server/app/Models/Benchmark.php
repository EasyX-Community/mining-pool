<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $chip_id
 * @property string $algo
 * @property string $type
 * @property float $khps
 * @property string $device
 * @property string $vendor_id
 * @property string $chip
 * @property string $arch
 * @property int $power
 * @property int $plimit
 * @property int $freq
 * @property int $realfreq
 * @property int $memf
 * @property int $realmemf
 * @property string $client
 * @property string $os
 * @property string $driver
 * @property float $intensity
 * @property int $throughput
 * @property int $user_id
 * @property int $time
 * @property BenchChip $benchChip
 */
class Benchmark extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['chip_id', 'algo', 'type', 'khps', 'device', 'vendor_id', 'chip', 'arch', 'power', 'plimit', 'freq', 'realfreq', 'memf', 'realmemf', 'client', 'os', 'driver', 'intensity', 'throughput', 'user_id', 'time'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function benchChip()
    {
        return $this->belongsTo('App\Models\BenchChip', 'chip_id');
    }
}
