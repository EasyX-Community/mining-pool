<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coins', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name', 64)->nullable();
			$table->string('symbol', 16)->nullable()->index('symbol');
			$table->string('symbol2', 16)->nullable();
			$table->string('algo', 16)->nullable()->index('algo');
			$table->string('version', 32)->nullable();
			$table->string('image', 1024)->nullable();
			$table->string('market', 64)->nullable();
			$table->integer('market_id')->nullable();
			$table->string('master_wallet', 1024)->nullable();
			$table->string('charity_address', 1024)->nullable();
			$table->float('charity_amount', 10, 0)->nullable();
			$table->float('charity_percent', 10, 0)->nullable();
			$table->string('deposit_address', 1024)->nullable();
			$table->float('deposit_minimum', 10, 0)->nullable()->default(1);
			$table->boolean('sell_on_bid')->nullable();
			$table->boolean('dont_sell')->nullable()->default(1);
			$table->string('block_explorer', 1024)->nullable();
			$table->float('index_avg', 10, 0)->nullable()->index('index_avg');
			$table->integer('connections')->nullable();
			$table->string('errors', 1024)->nullable();
			$table->float('balance', 10, 0)->nullable();
			$table->float('immature', 10, 0)->nullable();
			$table->float('cleared', 10, 0)->nullable();
			$table->float('available', 10, 0)->nullable();
			$table->float('stake', 10, 0)->nullable();
			$table->float('mint', 10, 0)->nullable();
			$table->float('tx_fee', 10, 0)->nullable();
			$table->float('payout_min', 10, 0)->nullable();
			$table->float('payout_max', 10, 0)->nullable();
			$table->integer('block_time')->nullable();
			$table->float('difficulty', 10, 0)->nullable()->default(1);
			$table->float('difficulty_pos', 10, 0)->nullable();
			$table->integer('block_height')->nullable();
			$table->integer('target_height')->nullable();
			$table->integer('powend_height')->nullable();
			$table->float('network_hash', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('price2', 10, 0)->nullable();
			$table->float('reward', 10, 0)->nullable()->default(1);
			$table->float('reward_mul', 10, 0)->nullable()->default(1);
			$table->integer('mature_blocks')->nullable();
			$table->boolean('enable')->nullable()->default(0)->index('enable');
			$table->boolean('auto_ready')->nullable()->default(0)->index('auto_ready');
			$table->boolean('visible')->nullable();
			$table->boolean('no_explorer')->default(0);
			$table->integer('max_miners')->nullable();
			$table->integer('max_shares')->nullable();
			$table->integer('created')->nullable()->index('created');
			$table->integer('action')->nullable();
			$table->string('conf_folder', 128)->nullable();
			$table->string('program', 128)->nullable();
			$table->string('rpc_user', 128)->nullable();
			$table->string('rpc_password', 128)->nullable();
			$table->string('server_user', 45)->nullable();
			$table->string('rpc_host', 128)->nullable();
			$table->integer('rpc_port')->nullable();
			$table->boolean('rpc_curl')->default(0);
			$table->boolean('rpc_ssl')->default(0);
			$table->string('rpc_cert')->nullable();
			$table->string('rpc_encoding', 16)->nullable();
			$table->string('account', 64)->default('');
			$table->boolean('has_get_info')->default(1);
			$table->boolean('hassubmitblock')->default(1);
			$table->boolean('has_master_nodes')->default(0);
			$table->boolean('use_memory_pool')->nullable();
			$table->boolean('usesegwit')->default(0);
			$table->boolean('tx_message')->nullable();
			$table->boolean('auxpow')->nullable();
			$table->boolean('multialgos')->default(0);
			$table->string('lastblock', 128)->nullable();
			$table->integer('network_ttf')->nullable();
			$table->integer('actual_ttf')->nullable();
			$table->integer('pool_ttf')->nullable();
			$table->integer('last_network_found')->nullable();
			$table->boolean('installed')->nullable();
			$table->boolean('watch')->default(0);
			$table->string('link_site', 1024)->nullable();
			$table->string('link_exchange', 1024)->nullable();
			$table->string('link_bitcointalk', 1024)->nullable();
			$table->string('link_github', 1024)->nullable();
			$table->string('link_explorer', 1024)->nullable();
			$table->binary('specifications', 65535)->nullable();
			$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coins');
	}

}
