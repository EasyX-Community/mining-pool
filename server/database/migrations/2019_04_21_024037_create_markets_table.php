<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('markets', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('coin_id')->nullable()->index('coin_id');
			$table->boolean('disabled')->default(0);
			$table->integer('market_id')->nullable();
			$table->boolean('priority')->default(0);
			$table->integer('lastsent')->nullable()->index('lastsent');
			$table->integer('lasttraded')->nullable()->default(0)->index('lasttraded');
			$table->integer('balancetime')->nullable();
			$table->boolean('deleted')->nullable();
			$table->float('tx_fee', 10, 0)->nullable();
			$table->float('balance', 10, 0)->nullable();
			$table->float('ontrade', 10, 0)->default(0);
			$table->float('price', 10, 0)->nullable();
			$table->float('price2', 10, 0)->nullable();
			$table->integer('pricetime')->nullable();
			$table->string('deposit_address', 1024)->nullable();
			$table->string('message', 2048)->nullable();
			$table->string('name', 16)->nullable()->index('name');
			$table->string('base_coin', 64)->nullable();
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
		Schema::drop('markets');
	}

}
