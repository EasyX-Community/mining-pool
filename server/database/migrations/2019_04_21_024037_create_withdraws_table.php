<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWithdrawsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdraws', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('market', 1024)->nullable();
			$table->string('address', 1024)->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->integer('time')->nullable();
			$table->string('uuid', 1024)->nullable();
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
		Schema::drop('withdraws');
	}

}
