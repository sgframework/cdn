<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmittedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submitted', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ponumber')->nullable();
            $table->integer('branchnumber')->nullable();
            $table->integer('itemnumber')->nullable();
            $table->integer('itemqty')->nullable();
            $table->integer('totalitems')->nullable();
            $table->integer('totalqty')->nullable();
            $table->decimal('totalprice', 18, 2)->nullable(); 
            $table->string('status')->default('Submitted')->nullable();
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
        Schema::dropIfExists('submitted');
    }
}
