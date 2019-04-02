<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid')->nullable();
            $table->integer('ordernumber')->nullable();
            $table->string('staffname')->nullable();
            $table->integer('staffid')->nullable();
            $table->integer('ponumber')->nullable();
            $table->integer('branchnumber')->nullable();
            $table->integer('itemnumber')->nullable();
            $table->string('orderitems')->nullable();
            $table->integer('itemqty')->nullable();
            $table->integer('freeitem')->nullable();
            $table->integer('orderstatus')->nullable();
            $table->decimal('itemprice', 8, 2)->nullable();
            $table->index(['ordernumber', 'ponumber']);
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
        Schema::dropIfExists('orderitems');
    }
}
