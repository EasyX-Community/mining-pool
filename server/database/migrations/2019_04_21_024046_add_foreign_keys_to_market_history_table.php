<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMarketHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('market_history', function(Blueprint $table)
		{
			$table->foreign('coin_id', 'fk_mh_coin')->references('id')->on('coins')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('market_id', 'fk_mh_market')->references('id')->on('markets')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('market_history', function(Blueprint $table)
		{
			$table->dropForeign('fk_mh_coin');
			$table->dropForeign('fk_mh_market');
		});
	}

}
