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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("Res_time");
            $table->string("phone");
            $table->string("nog");
            $table->string("message")->nullable();
            $table->string("reserved_by");
            $table->softDeletes();
            $table->string("reservation_status")->default("reserved");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
