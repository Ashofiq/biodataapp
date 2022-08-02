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
        Schema::create('educational_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodataId')->nullable();
            $table->foreign('biodataId')->references('id')->on('biodatas')->onDelete('cascade');
            $table->text('institute')->nullable();
            $table->string('passingYear')->nullable();
            $table->string('result')->nullable();
            $table->string('outOf')->nullable();
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
        Schema::dropIfExists('educational_infos');
    }
};
