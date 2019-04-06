<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('itemid');
            $table->integer('itemnumber');
            $table->string('itemname');
            $table->decimal('itemprice', 8, 2)->nullable();
            $table->integer('itemsku')->nullable();
            $table->integer('plant')->nullable();
            $table->integer('instock')->nullable();
            $table->string('link')->nullable();
            $table->string('type')->nullable();
            $table->string('group')->nullable();
            $table->string('itempic')->default("item.png");
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
        Schema::dropIfExists('items');
    }
}
