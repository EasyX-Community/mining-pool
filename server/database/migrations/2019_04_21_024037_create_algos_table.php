<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlgosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('algos', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('name', 16)->nullable()->index('name');
			$table->float('profit', 10, 0)->nullable();
			$table->float('rent', 10, 0)->nullable();
			$table->float('factor', 10, 0)->nullable();
			$table->boolean('overflow')->nullable();
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
		Schema::drop('algos');
	}

}
