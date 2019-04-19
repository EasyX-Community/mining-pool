<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStratumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stratums', function(Blueprint $table)
		{
			$table->integer('pid')->primary();
			$table->integer('time')->nullable();
			$table->integer('started')->unsigned()->nullable();
			$table->string('algo', 64)->nullable();
			$table->integer('workers')->unsigned()->default(0);
			$table->integer('port')->unsigned()->nullable();
			$table->string('symbol', 16)->nullable();
			$table->string('url', 128)->nullable();
			$table->integer('fds')->unsigned()->default(0);
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
		Schema::drop('stratums');
	}

}
