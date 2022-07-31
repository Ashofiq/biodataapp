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
            $table->unsignedBigInteger('biodataId');
            $table->foreign('biodataId')->references('id')->on('biodatas')->onDelete('cascade');
            $table->text('institute');
            $table->string('passingYear');
            $table->string('result');
            $table->string('outOf');
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
