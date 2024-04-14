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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('image_path')->nullable();
            $table->string('status');
            $table->string('priority');
            $table->date('due_date')->nullable();

            // users
            $table->foreignId('assigned_to')->nullable()->constrained('users');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');

            $table->foreignId('project_id')->constrained('projects');

            // added created_at and updated_at columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
