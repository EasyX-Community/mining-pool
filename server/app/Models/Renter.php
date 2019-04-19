<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $created
 * @property int $updated
 * @property string $address
 * @property string $email
 * @property string $password
 * @property string $apikey
 * @property float $received
 * @property float $balance
 * @property float $unconfirmed
 * @property float $spent
 * @property float $custom_start
 * @property float $custom_balance
 * @property float $custom_accept
 * @property float $custom_reject
 * @property string $custom_address
 * @property string $custom_server
 */
class Renter extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created', 'updated', 'address', 'email', 'password', 'apikey', 'received', 'balance', 'unconfirmed', 'spent', 'custom_start', 'custom_balance', 'custom_accept', 'custom_reject', 'custom_address', 'custom_server'];

}
