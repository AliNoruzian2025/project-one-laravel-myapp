<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // رابطه با کاربر
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // رابطه با پست
            $table->text('body');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
