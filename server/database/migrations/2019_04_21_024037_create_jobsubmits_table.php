<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsubmitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobsubmits', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('jobid')->nullable();
			$table->integer('time')->nullable();
			$table->boolean('valid')->nullable();
			$table->integer('status')->nullable();
			$table->float('difficulty', 10, 0)->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->string('algo', 16)->nullable();
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
		Schema::drop('jobsubmits');
	}

}
