<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSharesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shares', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('user_id')->nullable()->index('user1');
			$table->integer('workerid')->nullable()->index('worker1');
			$table->integer('coin_id')->nullable()->index('coin1');
			$table->integer('jobid')->nullable()->index('jobid');
			$table->integer('pid')->nullable();
			$table->integer('time')->nullable()->index('time');
			$table->integer('error')->nullable();
			$table->boolean('valid')->nullable()->index('valid1');
			$table->boolean('extranonce1')->nullable();
			$table->float('difficulty', 10, 0)->default(0);
			$table->float('share_diff', 10, 0)->default(0);
			$table->string('algo', 16)->nullable()->default('x11')->index('algo1');
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
		Schema::drop('shares');
	}

}
