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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id');
            $table->foreignId('broker_id');     
            $table->longText('conditions');
            $table->string('policies');
            $table->integer('offer');       
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->timestamps();
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('broker_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
