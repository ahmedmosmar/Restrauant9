<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoureModelsTable extends Migration
{

    public function up()
    {
        Schema::create('scoure_models', function (Blueprint $table) {
            $table->id();
            $table->float('scoure');
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
        Schema::dropIfExists('scoure_models');
    }
}