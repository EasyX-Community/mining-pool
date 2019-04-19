<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRentertxsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rentertxs', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('renter_id')->nullable()->index('renter_id');
			$table->integer('time')->nullable()->index('time');
			$table->float('amount', 10, 0)->nullable();
			$table->string('type', 32)->nullable();
			$table->string('address', 1024)->nullable();
			$table->string('tx', 1024)->nullable();
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
		Schema::drop('rentertxs');
	}

}
