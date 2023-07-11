<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->enum('gender',['Male','Female','Others']);
            $table->date('date_of_birth');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->set('hobbies',['Sports','Music','Vedio_Games','Travel']);
            $table->string('avatar');
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users'); 
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
