<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('coin_id')->nullable()->index('coin');
			$table->integer('last_earning')->nullable()->index('earning');
			$table->boolean('is_locked')->nullable()->default(0);
			$table->boolean('no_fees')->nullable();
			$table->boolean('donation')->default(0);
			$table->boolean('logtraffic')->nullable();
			$table->float('balance', 10, 0)->nullable()->default(0)->index('balance');
			$table->string('username', 128)->unique('username');
			$table->string('coinsymbol', 16)->nullable();
			$table->integer('swap_time')->unsigned()->nullable();
			$table->string('login', 45)->nullable();
			$table->string('hostaddr', 39)->nullable();
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
		Schema::drop('accounts');
	}

}
