<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();

            $table->string('page');
            $table->string('type');
            $table->string('name');

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->json('content')->nullable();

            $table->timestamps();

            $table->index(['page', 'type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
