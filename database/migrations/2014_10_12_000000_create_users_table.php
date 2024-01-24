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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('number')->nullable();
            $table->string('password')->default('12345678');
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('profession')->nullable();
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('balance')->nullable();
            $table->string('status')->default(true);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
