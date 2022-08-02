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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('email');
            $table->string('phone');
            $table->string('contactNo')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->text('presantAddress')->nullable();
            $table->text('permanentAddress')->nullable();
            $table->text('hobbie')->nullable();
            $table->text('photo')->default('');
            $table->text('skills')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('biodatas');
    }
};
