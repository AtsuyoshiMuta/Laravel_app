<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintext', function (Blueprint $table) {
            $table->id();
            $table->integer('poster_id');
            $table->timestamps();
            $table->string('title');
            $table->string('maintext');
            $table->integer('hmm');
            $table->integer('agree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintext');
    }
}
