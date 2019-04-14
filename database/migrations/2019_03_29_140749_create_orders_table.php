<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orderid')->nullable();
            $table->integer('ordernumber');
            $table->string('staffname');
            $table->integer('staffid');
            $table->string('ponumber');
            $table->integer('branchnumber');
            $table->string('branchname');
            $table->string('urgent')->default('off')->nullable();
            $table->string('slug');
            $table->string('status')->default('JustCreated')->nullable();
            $table->integer('totalitems')->nullable();
            $table->integer('totalqty')->nullable();
            $table->decimal('totalprice', 8, 2)->nullable(); 
            $table->string('attachedpo')->nullable();        
            $table->index('ordernumber');
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
        Schema::dropIfExists('orders');
    }
}
