<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up(): void
{
    Schema::create('sports', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('type');
        $table->string('category');
        $table->string('address');
        $table->string('city');
        $table->decimal('lat', 10, 6);
        $table->decimal('lng', 10, 6);
        $table->decimal('price', 8, 2);
        $table->float('rating', 2, 1);
        $table->unsignedInteger('reviews');
        $table->date('date');
        $table->timestamps();
    });
}


public function down(): void
{
    Schema::dropIfExists('sports');
}
};
