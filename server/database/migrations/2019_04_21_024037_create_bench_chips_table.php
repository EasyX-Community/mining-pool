<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBenchChipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bench_chips', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('devicetype', 8)->nullable()->index('ndx_chip_type');
			$table->string('vendor_id', 12)->nullable();
			$table->string('chip', 32)->nullable()->index('ndx_chip_name');
			$table->integer('year')->unsigned()->nullable();
			$table->float('maxtdp', 10, 0)->nullable();
			$table->float('blake_rate', 10, 0)->nullable();
			$table->float('blake_power', 10, 0)->nullable();
			$table->float('x11_rate', 10, 0)->nullable();
			$table->float('x11_power', 10, 0)->nullable();
			$table->float('sha_rate', 10, 0)->nullable();
			$table->float('sha_power', 10, 0)->nullable();
			$table->float('scrypt_rate', 10, 0)->nullable();
			$table->float('scrypt_power', 10, 0)->nullable();
			$table->float('dag_rate', 10, 0)->nullable();
			$table->float('dag_power', 10, 0)->nullable();
			$table->float('lyra_rate', 10, 0)->nullable();
			$table->float('lyra_power', 10, 0)->nullable();
			$table->float('neo_rate', 10, 0)->nullable();
			$table->float('neo_power', 10, 0)->nullable();
			$table->string('url')->nullable();
			$table->string('features')->nullable();
			$table->text('perfdata', 65535)->nullable();
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
		Schema::drop('bench_chips');
	}

}
