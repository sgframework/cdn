<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsv2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     /** Mini Market Prices List ||  */
    public function up()
    {
        Schema::create('itemsv2', function (Blueprint $table) {
            $table->increments('itemid');
            $table->integer('itemnumber')->nullable();
            $table->string('itemname')->nullable();
            $table->decimal('itemoldprice', 8, 2)->nullable();
            $table->decimal('itemnewprice', 8, 2)->nullable();
            $table->integer('itemsku')->nullable();
            $table->integer('plant')->nullable();
            $table->integer('instock')->nullable();
            $table->string('link')->nullable();
            $table->string('type')->nullable();
            $table->string('itemgroup')->nullable();
            $table->string('itempic')->nullable();
            $table->index('itemnumber');
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
        Schema::dropIfExists('itemsv2');
    }
}
