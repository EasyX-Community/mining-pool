<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workers', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('user_id')->nullable()->index('user_id');
			$table->integer('time')->nullable();
			$table->integer('pid')->nullable()->index('pid');
			$table->boolean('subscribe')->nullable();
			$table->float('difficulty', 10, 0)->nullable();
			$table->string('ip', 32)->nullable();
			$table->string('dns', 1024)->nullable();
			$table->string('name', 40)->nullable()->index('name1');
			$table->string('nonce1', 64)->nullable();
			$table->string('version', 64)->nullable();
			$table->string('password', 64)->nullable();
			$table->string('worker', 64)->nullable();
			$table->string('algo', 16)->nullable()->default('scrypt')->index('algo1');
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
		Schema::drop('workers');
	}

}
