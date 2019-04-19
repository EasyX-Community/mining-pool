<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHashrateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hashrate', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('time')->nullable()->index('t1');
			$table->bigInteger('hashrate')->nullable();
			$table->bigInteger('hashrate_bad')->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('rent', 10, 0)->nullable();
			$table->float('earnings', 10, 0)->nullable();
			$table->float('difficulty', 10, 0)->nullable();
			$table->string('algo', 16)->nullable()->index('a1');
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
		Schema::drop('hashrate');
	}

}
