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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doc_id')->unsigned();
            $table->bigInteger('pat_id')->unsigned();
            $table->bigInteger('medical_id')->unsigned()->nullable();
            $table->bigInteger('history_id')->unsigned()->nullable();
            $table->bigInteger('physical_id')->unsigned()->nullable();
            $table->bigInteger('rad_id')->unsigned()->nullable();
            $table->bigInteger('remark_id')->unsigned()->nullable();
            $table->date('date');
            $table->timestamps();
            $table->foreign('doc_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('pat_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('medical_id')->references('id')->on('medical_histories')->onDelete('cascade');
            $table->foreign('history_id')->references('id')->on('histories')->onDelete('cascade');
            $table->foreign('physical_id')->references('id')->on('physical_examinations')->onDelete('cascade');
            $table->foreign('rad_id')->references('id')->on('radiologics')->onDelete('cascade');
            $table->foreign('remark_id')->references('id')->on('remarks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
