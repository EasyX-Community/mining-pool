<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNicehashTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nicehash', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->boolean('active')->nullable();
			$table->integer('orderid')->nullable();
			$table->integer('last_decrease')->nullable();
			$table->string('algo', 32)->nullable();
			$table->float('btc', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('speed', 10, 0)->nullable();
			$table->integer('workers')->nullable();
			$table->float('accepted', 10, 0)->nullable();
			$table->float('rejected', 10, 0)->nullable();
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
		Schema::drop('nicehash');
	}

}
