<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

}

