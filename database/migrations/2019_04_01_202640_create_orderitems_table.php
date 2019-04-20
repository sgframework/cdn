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
            $table->string('orderid')->nullable();
            $table->integer('ordernumber')->nullable();
            $table->string('staffname')->nullable();
            $table->integer('staffid')->nullable();
            $table->string('ponumber')->nullable();
            $table->string('branchname')->nullable();
            $table->integer('branchnumber')->nullable();
            $table->string('orderitems')->nullable();
            $table->integer('itemnumber')->nullable();
            $table->integer('itemqty')->nullable();
            $table->integer('freeitem')->nullable();
            $table->decimal('itemprice', 18, 2)->nullable();
            $table->string('orderstatus')->default('Editing')->nullable();
            $table->string('slug');
            $table->integer('totalqty')->nullable();
            $table->integer('totalfree')->nullable();  
            $table->decimal('totalprice', 18, 2)->nullable();         
            $table->decimal('totalqtyprice', 18, 2)->nullable();         
            $table->index(['ponumber', 'branchnumber', 'itemnumber']);
            $table->timestamps();
        });

        //[0] - JustCreated, [1] - Editing, [2] - Reviewing, [3] - Submitted, [4] - Completed
        // Max Numric Value 1,000,000,000,000,000.00 SAR //


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
