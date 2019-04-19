<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_history', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('time')->index('time');
			$table->unsignedBigInteger('coin_id')->index('coin_id');
			$table->float('price', 10, 0)->nullable();
			$table->float('price2', 10, 0)->nullable();
			$table->float('balance', 10, 0)->nullable();
			$table->unsignedBigInteger('market_id')->nullable()->index('market_id');
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
		Schema::drop('market_history');
	}

}
