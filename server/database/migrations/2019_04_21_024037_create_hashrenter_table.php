<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHashrenterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hashrenter', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('renter_id')->nullable();
			$table->integer('jobid')->nullable();
			$table->integer('time')->nullable();
			$table->float('hashrate', 10, 0)->nullable();
			$table->float('hashrate_bad', 10, 0)->nullable();
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
		Schema::drop('hashrenter');
	}

}
