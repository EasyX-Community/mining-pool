<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('renter_id')->nullable()->index('renter_id');
			$table->boolean('ready')->nullable()->index('ready');
			$table->boolean('active')->nullable()->index('active');
			$table->integer('time')->nullable();
			$table->float('price', 10, 0)->nullable()->index('price');
			$table->float('speed', 10, 0)->nullable();
			$table->float('difficulty', 10, 0)->nullable();
			$table->string('algo', 16)->nullable()->index('algo');
			$table->string('host', 1024)->nullable();
			$table->integer('port')->nullable();
			$table->string('username', 1024)->nullable();
			$table->string('password', 1024)->nullable();
			$table->float('percent', 10, 0)->nullable();
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
		Schema::drop('jobs');
	}

}
