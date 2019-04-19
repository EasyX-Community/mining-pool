<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('coin_id')->index('notif_coin');
			$table->integer('enabled')->default(0);
			$table->string('description', 128)->nullable();
			$table->string('conditiontype', 32)->nullable();
			$table->float('conditionvalue', 10, 0)->nullable();
			$table->string('notifytype', 32)->nullable();
			$table->string('notifycmd', 512)->nullable();
			$table->integer('lastchecked')->unsigned()->nullable()->index('notif_checked');
			$table->integer('lasttriggered')->unsigned()->nullable();
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
		Schema::drop('notifications');
	}

}
