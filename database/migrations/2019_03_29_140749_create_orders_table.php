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
            $table->integer('orderid')->nullable();
            $table->integer('ordernumber');
            $table->string('staffname');
            $table->integer('staffid');
            $table->integer('ponumber');
            $table->integer('branchnumber');
            $table->string('branchname');
            $table->string('urgent')->default('0')->nullable();
            $table->string('slug');
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
