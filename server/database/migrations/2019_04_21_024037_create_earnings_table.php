<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('earnings', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('user_id')->nullable()->index('user');
			$table->integer('coin_id')->nullable()->index('coin');
			$table->integer('blockid')->nullable()->index('block');
			$table->integer('create_time')->nullable()->index('create1');
			$table->float('amount', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->integer('status')->nullable()->index('status');
			$table->integer('mature_time')->nullable();
			$table->unique(['user_id','blockid'], 'ndx_user_block');
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
		Schema::drop('earnings');
	}

}
