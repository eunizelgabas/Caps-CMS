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
        Schema::create('physical_examinations', function (Blueprint $table) {
            $table->id();
            $table->string('height');
            $table->string('wieght');
            $table->string('bp');
            $table->string('pr');
            $table->string('rr');
            $table->string('saturation');
            $table->string('lmp');
            $table->boolean('head_neck_scalp')->comment("1-normal, 0-abnormal");
            $table->boolean('eyes')->comment("1-normal, 0-abnormal");
            $table->boolean('ears')->comment("1-normal, 0-abnormal");
            $table->boolean('nose_sinuses')->comment("1-normal, 0-abnormal");
            $table->boolean('mouth')->comment("1-normal, 0-abnormal");
            $table->boolean('neck_thyroid')->comment("1-normal, 0-abnormal");
            $table->boolean('chest_breast_axilla')->comment("1-normal, 0-abnormal");
            $table->boolean('heart')->comment("1-normal, 0-abnormal");
            $table->boolean('lungs')->comment("1-normal, 0-abnormal");
            $table->boolean('abdomen')->comment("1-normal, 0-abnormal");
            $table->boolean('back')->comment("1-normal, 0-abnormal");
            $table->boolean('anus')->comment("1-normal, 0-abnormal");
            $table->boolean('gut')->comment("1-normal, 0-abnormal");
            $table->boolean('inguinals')->comment("1-normal, 0-abnormal");
            $table->boolean('reflexes')->comment("1-normal, 0-abnormal");
            $table->boolean('extremities')->comment("1-normal, 0-abnormal");
            $table->boolean('dental')->comment("1-normal, 0-abnormal");
            $table->string('right_eye');
            $table->string('left_eye');
            $table->string('withg_right_eye');
            $table->string('withg_left_eye');
            $table->string('ishinara');
            $table->string('colour_blind')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_examinations');
    }
};
