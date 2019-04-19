<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPayoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payouts', function(Blueprint $table)
		{
			$table->foreign('account_id', 'fk_payouts_account')->references('id')->on('accounts')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('coin_id', 'fk_payouts_coin')->references('id')->on('coins')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payouts', function(Blueprint $table)
		{
			$table->dropForeign('fk_payouts_account');
			$table->dropForeign('fk_payouts_coin');
		});
	}

}
