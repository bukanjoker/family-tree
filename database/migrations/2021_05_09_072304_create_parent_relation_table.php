<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_relation', function (Blueprint $table) {
            $table->id();
            $table->uuid('parent_id');
            $table->uuid('child_id');
            $table->timestamps();

            $table->foreign('parent_id')->references('user_id')->on('users');
            $table->foreign('child_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_relation');
    }
}
