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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('manager');
            $table->string('name');
            $table->string('surname');
            $table->string('city');
            $table->string('title');
            $table->integer('salary');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('project');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
