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
        Schema::create('clinic_settings', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name')->default('thrumble.fertility Reproductive Medicine & Advanced Conception Centre');
            $table->string('art_reg_no')->default('ART-IND-2026-0894');
            $table->string('director_name')->default('Dr. Elena Vance, MD (Reprod. Endo)');
            $table->string('incubator_temp')->default('37.0°C (6% CO2, 5% O2)');
            $table->string('ln2_alarm')->default('Liquid Level < 15 cm');
            $table->string('contact_phone')->nullable()->default('+91 98200 00000');
            $table->string('contact_email')->nullable()->default('contact@fertility.thrumble.online');
            $table->text('clinic_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_settings');
    }
};

