<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('coin_id')->nullable()->index('coin');
			$table->integer('height')->unsigned()->nullable()->index('height1');
			$table->integer('confirmations')->nullable();
			$table->integer('time')->nullable()->index('time');
			$table->integer('user_id')->nullable()->index('user1');
			$table->integer('workerid')->nullable();
			$table->float('difficulty_user', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->float('difficulty', 10, 0)->nullable();
			$table->string('category', 16)->nullable()->index('category');
			$table->string('algo', 16)->nullable()->default('scrypt')->index('algo1');
			$table->string('blockhash', 128)->nullable();
			$table->string('txhash', 128)->nullable();
			$table->boolean('segwit')->default(0);
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
		Schema::drop('blocks');
	}

}
