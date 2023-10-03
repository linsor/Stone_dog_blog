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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('NamePost', 120);
            $table->text('Content');
            $table->dateTime('date');
            $table->integer('Likes')->nullable();
            $table->string('PostImage')->default('Image.png');
            $table->unsignedBigInteger('Author')->nullable();
            $table->string('NameGame')->nullable();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
