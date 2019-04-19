<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stats', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('time')->nullable()->index('time');
			$table->float('profit', 10, 0)->nullable();
			$table->float('wallet', 10, 0)->nullable();
			$table->float('wallets', 10, 0)->nullable();
			$table->float('immature', 10, 0)->nullable();
			$table->float('margin', 10, 0)->nullable();
			$table->float('waiting', 10, 0)->nullable();
			$table->float('balances', 10, 0)->nullable();
			$table->float('onsell', 10, 0)->nullable();
			$table->float('renters', 10, 0)->nullable();
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
		Schema::drop('stats');
	}

}
