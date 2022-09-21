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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('email');
            $table->text('affiliation')->nullable();
            $table->text('password');
            $table->date('birth_date')->nullable();
            $table->integer('score')->nullable();
            $table->text('github')->nullable();
            $table->text('user_image_url')->nullable();
            $table->text('wanted_image_url')->nullable();
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
        Schema::dropIfExists('users');
    }
};
