<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBenchmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('benchmarks', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('algo', 16)->index('ndx_algo');
			$table->string('type', 8)->index('ndx_type');
			$table->float('khps', 10, 0)->nullable();
			$table->string('device', 80)->nullable();
			$table->string('vendor_id', 12)->nullable();
			$table->string('chip', 32)->nullable();
			$table->unsignedBigInteger('chip_id')->nullable()->index('ndx_chip');
			$table->string('arch', 8)->nullable();
			$table->integer('power')->unsigned()->nullable();
			$table->integer('plimit')->unsigned()->nullable();
			$table->integer('freq')->unsigned()->nullable();
			$table->integer('realfreq')->unsigned()->nullable();
			$table->integer('memf')->unsigned()->nullable();
			$table->integer('realmemf')->unsigned()->nullable();
			$table->string('client', 48)->nullable();
			$table->string('os', 8)->nullable();
			$table->string('driver', 32)->nullable();
			$table->float('intensity', 10, 0)->nullable();
			$table->integer('throughput')->unsigned()->nullable();
			$table->integer('user_id')->nullable()->index('bench_userid');
			$table->integer('time')->unsigned()->index('ndx_time');
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
		Schema::drop('benchmarks');
	}

}
