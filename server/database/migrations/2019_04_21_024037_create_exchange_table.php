<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExchangeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exchange', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('coin_id')->nullable()->index('coin_id');
			$table->integer('send_time')->nullable()->index('send_time');
			$table->integer('receive_time')->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('price_estimate', 10, 0)->nullable();
			$table->float('quantity', 10, 0)->nullable();
			$table->float('fee', 10, 0)->nullable();
			$table->string('status', 16)->nullable()->index('status');
			$table->string('market', 16)->nullable()->index('market');
			$table->string('tx', 65)->nullable();
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
		Schema::drop('exchange');
	}

}
