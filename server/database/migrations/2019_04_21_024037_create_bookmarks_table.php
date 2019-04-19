<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookmarks', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('coin_id')->index('bookmarks_coin');
			$table->string('label', 32)->nullable();
			$table->string('address', 128);
			$table->integer('last_used')->unsigned()->nullable();
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
		Schema::drop('bookmarks');
	}

}
