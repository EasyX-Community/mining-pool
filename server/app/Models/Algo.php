<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Utilities\HashRates as HashRateUtils;

/**
 * @property int $id
 * @property string $name
 * @property float $profit
 * @property float $rent
 * @property float $factor
 * @property boolean $overflow
 */
class Algo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'profit', 'rent', 'factor', 'overflow'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workers()
    {
        return $this->hasMany('App\Models\Worker', 'algo', 'name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hashRates()
    {
        return $this->hasMany('App\Models\HashRate', 'algo', 'name');
    }

    /**
     * @return Float
     */
    public function getAverageHashRateAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->avg('hashrate')) . 'h/s';
    }

    /**
     * @return Float
     */
    public function getAverageHashRate1hAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (60*60))
                ->avg('hashrate')) . 'h/s';
    }
    /**
     * @return Float
     */
    public function getAverageHashRate24hAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (24*60*60))
                ->avg('hashrate')) . 'h/s';
    }

    /**
     * @return Float
     */
    public function getAverageHashRate7dAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (7*24*60*60))
                ->avg('hashrate')) . 'h/s';
    }

    /**
     * @return Float
     */
    public function getAverageHashRate30dAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (30*24*60*60))
                ->avg('hashrate')) . 'h/s';
    }    

}

