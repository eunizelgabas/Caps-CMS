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
        Schema::create('radiologics', function (Blueprint $table) {
            $table->id();
            $table->string('exam_results')->nullable();
            $table->bigInteger('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('forms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiologics');
    }
};
