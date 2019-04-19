<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiningTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mining', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->float('usdbtc', 10, 0)->nullable();
			$table->integer('last_monitor_exchange')->nullable();
			$table->integer('last_update_price')->nullable();
			$table->integer('last_payout')->nullable();
			$table->string('stratumids', 1024)->nullable();
			$table->string('best_algo', 64)->nullable();
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
		Schema::drop('mining');
	}

}
