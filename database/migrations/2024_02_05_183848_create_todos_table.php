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
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('todo_id');
            $table->string('todo_name',50)->unique();
            $table->string('todo_phone',20)->nullable();
            $table->string('todo_work',60)->nullable();
            $table->string('todo_email',60)->nullable();
            $table->string('todo_photo',100)->nullable();
            $table->string('todo_slug',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
