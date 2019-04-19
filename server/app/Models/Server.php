<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $maxcoins
 * @property string $uptime
 */
class Server extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'maxcoins', 'uptime'];

}
