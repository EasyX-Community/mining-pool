<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renters', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('created')->nullable();
			$table->integer('updated')->nullable();
			$table->string('address', 1024)->nullable();
			$table->string('email', 1024)->nullable();
			$table->string('password', 64)->nullable();
			$table->binary('apikey', 1024)->nullable();
			$table->float('received', 10, 0)->nullable();
			$table->float('balance', 10, 0)->nullable();
			$table->float('unconfirmed', 10, 0)->nullable();
			$table->float('spent', 10, 0)->nullable();
			$table->float('custom_start', 10, 0)->nullable();
			$table->float('custom_balance', 10, 0)->nullable();
			$table->float('custom_accept', 10, 0)->nullable();
			$table->float('custom_reject', 10, 0)->nullable();
			$table->string('custom_address', 1024)->nullable();
			$table->string('custom_server', 1024)->nullable();
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
		Schema::drop('renters');
	}

}
