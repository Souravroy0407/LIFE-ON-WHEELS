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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id("booking_id");
            $table->string('service_name');
            $table->string('customer_Name');
            $table->string('phone_no');
            $table->string('email');
            $table->string('destination_hospital');
            $table->string('ambulance_type');
            $table->decimal('totalAmount',10,2);
            $table->string('address');
            $table->decimal('total_distance',10,2);
            $table->string('payment_mode');
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
