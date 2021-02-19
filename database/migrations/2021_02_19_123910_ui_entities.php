<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UiEntities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('phone');
            $table->timestamps();
        });
        Schema::create('actor_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('amount');
            $table->integer('client_rank');
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
        Schema::dropIfExists('actor_transactions');
        Schema::dropIfExists('actors');
    }
}
