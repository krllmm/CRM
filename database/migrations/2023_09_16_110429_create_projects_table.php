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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description');
            $table->date('deadline')->default('2030-01-01');
            $table->string('status')->default('to-do');

            $table->integer('worker_id')->unsigned();
            $table->foreign('worker_id')->references('id')->on('workers');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
