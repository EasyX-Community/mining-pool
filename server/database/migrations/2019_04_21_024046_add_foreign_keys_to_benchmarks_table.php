<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBenchmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('benchmarks', function(Blueprint $table)
		{
			$table->foreign('chip_id', 'fk_bench_chip')->references('id')->on('bench_chips')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('benchmarks', function(Blueprint $table)
		{
			$table->dropForeign('fk_bench_chip');
		});
	}

}
