<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FriendsCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('friends', function(Blueprint $table) {
		$table->increments('id');
		$table->integer('user_id');
		$table->integer('friend_id');
		$table->integer('accepted');
		$table->timestamps();


	
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('friends');
    }
}
