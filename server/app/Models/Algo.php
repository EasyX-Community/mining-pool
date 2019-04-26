<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Utilities\HashRates as HashRateUtils;
use Laravel\Scout\Searchable;

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
    use Searchable;

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coins()
    {
        return $this->hasMany('App\Models\Coin', 'algo', 'name');
    }

    /**
     * @return Float
     */
    public function getAverageHashRateAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->avg('hashrate'));
    }

    /**
     * @return Float
     */
    public function getAverageHashRate1hAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (60*60))
                ->avg('hashrate'));
    }
    /**
     * @return Float
     */
    public function getAverageHashRate24hAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (24*60*60))
                ->avg('hashrate'));
    }

    /**
     * @return Float
     */
    public function getAverageHashRate7dAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (7*24*60*60))
                ->avg('hashrate'));
    }

    /**
     * @return Float
     */
    public function getAverageHashRate30dAttribute()
    {
        return HashRateUtils::convertIntegerToString($this->hashRates
                ->where('time', '>', time() - (30*24*60*60))
                ->avg('hashrate'));
    }    


    /**
     * @return Int
     */
    public function getCoinCountAttribute()
    {
        return $this->coins()->enabled()->visible()->count();
    }

    /**
     * @return Int
     */
    public function getMinerCountAttribute()
    {
        return $this->miners()->count();
    }

    /**
     * Returns the key mapping for the algorithm's default port.
     * 
     * @return Int
     */
    public function getPortAttribute()
    {
        $a = array(
            'sha256'	=> 3333,
            'sha256t'	=> 3339,
            'lbry'		=> 3334,
            'scrypt'	=> 3433,
            'timetravel'	=> 3555,
            'bitcore'	=> 3556,
            'c11'		=> 3573,
            'deep'		=> 3535,
            'x11'		=> 3533,
            'x11evo'	=> 3553,
            'x12'		=> 3233,
            'x13'		=> 3633,
            'x15'		=> 3733,
            'x16r'		=> 3636,
            'x16s'		=> 3663,
            'x17'		=> 3737,
            'xevan'		=> 3739,
            'hmq1725'	=> 3747,
            'nist5'		=> 3833,
            'x14'		=> 3933,
            'quark'		=> 4033,
            'whirlpool'	=> 4133,
            'neoscrypt'	=> 4233,
            'argon2'	=> 4234,
            'scryptn'	=> 4333,
            'lyra2'		=> 4433,
            'lyra2v2'	=> 4533,
            'lyra2z'	=> 4553,
            'jha'		=> 4633,
            'qubit'		=> 4733,
            'zr5'		=> 4833,
            'skein'		=> 4933,
            'sib'		=> 5033,
            'keccak'	=> 5133,
            'keccakc'	=> 5134,
            'skein2'	=> 5233,
            //'groestl'	=> 5333,
            'dmd-gr'	=> 5333,
            'myr-gr'	=> 5433,
            'zr5'		=> 5533,
            // 5555 to 5683 reserved
            'blake'		=> 5733,
            'blakecoin'	=> 5743,
            'decred'	=> 3252,
            'vanilla'	=> 5755,
            'blake2s'	=> 5766,
            'penta'		=> 5833,
            'luffa'		=> 5933,
            'm7m'		=> 6033,
            'veltor'	=> 5034,
            'velvet'	=> 6133,
            'yescrypt'	=> 6233,
            'yescryptR16'	=> 6333,
            'yescryptR32'	=> 6343,
            'bastion'	=> 6433,
            'hsr'		=> 7433,
            'phi'		=> 8333,
            'polytimos'	=> 8463,
            'skunk'		=> 8433,
            'tribus'	=> 8533,
            'a5a'   	=> 8633,
        );

        if(!isset($a[$this->name]))
            return 3033;

        return $a[$this->name];
    }

    /**
     * Returns the mBTC Factor
     * 
     * @return Int
     */
    public function getmBTCFactorAttribute()
    {
        switch($this->name) {
            case 'sha256':
            case 'sha256t':
            case 'blake':
            case 'blakecoin':
            case 'blake2s':
            case 'decred':
            case 'keccak':
            case 'keccakc':
            case 'lbry':
            case 'vanilla':
                return 1000;
            default:
                return 1;
        }
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'algorithm';
    }
}

