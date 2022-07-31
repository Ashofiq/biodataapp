<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodataId');
            $table->foreign('biodataId')->references('id')->on('biodatas')->onDelete('cascade');
            $table->string('relation');
            $table->string('name');
            $table->string('ocupation');
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
        Schema::dropIfExists('family_infos');
    }
};
