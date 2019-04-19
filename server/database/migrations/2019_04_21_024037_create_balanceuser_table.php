<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalanceuserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balanceuser', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id')->nullable()->index('user_id');
			$table->integer('time')->nullable()->index('time');
			$table->float('balance', 10, 0)->nullable();
			$table->float('pending', 10, 0)->nullable();
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
		Schema::drop('balanceuser');
	}

}
