<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $symbol2
 * @property string $algo
 * @property string $version
 * @property string $image
 * @property string $market
 * @property int $market_id
 * @property string $master_wallet
 * @property string $charity_address
 * @property float $charity_amount
 * @property float $charity_percent
 * @property string $deposit_address
 * @property float $deposit_minimum
 * @property boolean $sell_on_bid
 * @property boolean $dont_sell
 * @property string $block_explorer
 * @property float $index_avg
 * @property int $connections
 * @property string $errors
 * @property float $balance
 * @property float $immature
 * @property float $cleared
 * @property float $available
 * @property float $stake
 * @property float $mint
 * @property float $tx_fee
 * @property float $payout_min
 * @property float $payout_max
 * @property int $block_time
 * @property float $difficulty
 * @property float $difficulty_pos
 * @property int $block_height
 * @property int $target_height
 * @property int $powend_height
 * @property float $network_hash
 * @property float $price
 * @property float $price2
 * @property float $reward
 * @property float $reward_mul
 * @property int $mature_blocks
 * @property boolean $enable
 * @property boolean $auto_ready
 * @property boolean $visible
 * @property boolean $no_explorer
 * @property int $max_miners
 * @property int $max_shares
 * @property int $created
 * @property int $action
 * @property string $conf_folder
 * @property string $program
 * @property string $rpc_user
 * @property string $rpc_password
 * @property string $server_user
 * @property string $rpc_host
 * @property int $rpc_port
 * @property boolean $rpc_curl
 * @property boolean $rpc_ssl
 * @property string $rpc_cert
 * @property string $rpc_encoding
 * @property string $account
 * @property boolean $has_get_info
 * @property boolean $hassubmitblock
 * @property boolean $has_master_nodes
 * @property boolean $use_memory_pool
 * @property boolean $usesegwit
 * @property boolean $tx_message
 * @property boolean $auxpow
 * @property boolean $multialgos
 * @property string $lastblock
 * @property int $network_ttf
 * @property int $actual_ttf
 * @property int $pool_ttf
 * @property int $last_network_found
 * @property boolean $installed
 * @property boolean $watch
 * @property string $link_site
 * @property string $link_exchange
 * @property string $link_bitcointalk
 * @property string $link_github
 * @property string $link_explorer
 * @property string $specifications
 * @property Bookmark[] $bookmarks
 * @property MarketHistory[] $marketHistories
 * @property Notification[] $notifications
 * @property Payout[] $payouts
 */
class Coin extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'symbol', 'symbol2', 'algo', 'version', 'image', 'market', 'market_id', 'master_wallet', 'charity_address', 'charity_amount', 'charity_percent', 'deposit_address', 'deposit_minimum', 'sell_on_bid', 'dont_sell', 'block_explorer', 'index_avg', 'connections', 'errors', 'balance', 'immature', 'cleared', 'available', 'stake', 'mint', 'tx_fee', 'payout_min', 'payout_max', 'block_time', 'difficulty', 'difficulty_pos', 'block_height', 'target_height', 'powend_height', 'network_hash', 'price', 'price2', 'reward', 'reward_mul', 'mature_blocks', 'enable', 'auto_ready', 'visible', 'no_explorer', 'max_miners', 'max_shares', 'created', 'action', 'conf_folder', 'program', 'rpc_user', 'rpc_password', 'server_user', 'rpc_host', 'rpc_port', 'rpc_curl', 'rpc_ssl', 'rpc_cert', 'rpc_encoding', 'account', 'has_get_info', 'hassubmitblock', 'has_master_nodes', 'use_memory_pool', 'usesegwit', 'tx_message', 'auxpow', 'multialgos', 'lastblock', 'network_ttf', 'actual_ttf', 'pool_ttf', 'last_network_found', 'installed', 'watch', 'link_site', 'link_exchange', 'link_bitcointalk', 'link_github', 'link_explorer', 'specifications'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark', 'coin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketHistories()
    {
        return $this->hasMany('App\Models\MarketHistory', 'coin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications()
    {
        return $this->hasMany('App\Models\Notification', 'coin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payouts()
    {
        return $this->hasMany('App\Models\Payout', 'coin_id');
    }
}
