<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bookmarks', function(Blueprint $table)
		{
			$table->foreign('coin_id', 'fk_bookmarks_coin')->references('id')->on('coins')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bookmarks', function(Blueprint $table)
		{
			$table->dropForeign('fk_bookmarks_coin');
		});
	}

}
