<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name', 64)->nullable();
			$table->string('algo', 64)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->bigInteger('speed')->nullable();
			$table->float('custom_balance', 10, 0)->nullable();
			$table->float('custom_accept', 10, 0)->nullable();
			$table->float('custom_reject', 10, 0)->nullable();
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
		Schema::drop('services');
	}

}
