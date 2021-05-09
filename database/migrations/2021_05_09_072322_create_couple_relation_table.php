<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupleRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_relation', function (Blueprint $table) {
            $table->id();
            $table->uuid('husband_id');
            $table->uuid('wife_id');
            $table->timestamps();

            $table->foreign('husband_id')->references('user_id')->on('users');
            $table->foreign('wife_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couple_relation');
    }
}
