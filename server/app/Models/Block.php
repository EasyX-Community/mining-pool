<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coin_id
 * @property int $height
 * @property int $confirmations
 * @property int $time
 * @property int $user_id
 * @property int $workerid
 * @property float $difficulty_user
 * @property float $price
 * @property float $amount
 * @property float $difficulty
 * @property string $category
 * @property string $algo
 * @property string $blockhash
 * @property string $txhash
 * @property boolean $segwit
 */
class Block extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['coin_id', 'height', 'confirmations', 'time', 'user_id', 'workerid', 'difficulty_user', 'price', 'amount', 'difficulty', 'category', 'algo', 'blockhash', 'txhash', 'segwit'];

}
