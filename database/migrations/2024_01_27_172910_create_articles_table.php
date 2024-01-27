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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("name")->index("name_index");
            $table->string("image");
            $table->text("description");

            $table->foreignId('category_id')->nullable()->constrained()->onUpdate("cascade")->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate("cascade")->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
