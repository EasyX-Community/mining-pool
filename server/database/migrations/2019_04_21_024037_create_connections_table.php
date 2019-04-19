<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connections', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('user', 64)->nullable();
			$table->string('host', 64)->nullable();
			$table->string('db', 64)->nullable();
			$table->integer('created')->nullable();
			$table->integer('idle')->nullable();
			$table->integer('last')->nullable();
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
		Schema::drop('connections');
	}

}
