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
        Schema::create('Services', function (Blueprint $table) {
            $table->id("service_id");
            $table->string('service_name');
            $table->string('ambulance_category');
            $table->decimal('service_charge',10,2);
            $table->string('service_details');
            $table->string('service_image');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
