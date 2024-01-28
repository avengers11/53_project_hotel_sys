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
        Schema::create('room_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->string('max_child')->nullable();
            $table->string('max_adults')->nullable();
            $table->json('facility')->nullable();
            $table->json('assign_room')->nullable();
            $table->integer('price')->nullable();
            $table->json('img')->nullable();
            $table->string('cover')->nullable();
            $table->string('room_size')->nullable();
            $table->integer('bed_no')->nullable();
            $table->integer('bed_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_categories');
    }
};
