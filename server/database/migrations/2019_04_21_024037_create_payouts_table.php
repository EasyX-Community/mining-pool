<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payouts', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('account_id');
			$table->unsignedBigInteger('coin_id')->nullable()->index('payouts_coin');
			$table->integer('time');
			$table->boolean('completed')->default(0);
			$table->float('amount', 10, 0)->nullable();
			$table->float('fee', 10, 0)->nullable();
			$table->string('tx', 128)->nullable();
			$table->string('memoid', 128)->nullable();
			$table->text('errmsg', 65535)->nullable();
			$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

			$table->index(['account_id','completed'], 'account_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payouts');
	}

}
