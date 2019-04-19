<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('coin_id')->nullable()->index('coin_id');
			$table->integer('created')->nullable()->index('created');
			$table->float('amount', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('ask', 10, 0)->nullable();
			$table->float('bid', 10, 0)->nullable();
			$table->string('market', 16)->nullable()->index('market');
			$table->string('uuid', 256)->nullable();
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
		Schema::drop('orders');
	}

}
