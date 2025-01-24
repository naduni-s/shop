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
        Schema::create('refill_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('decant_id')->constrained()->onDelete('cascade');
            $table->string('size'); // e.g., 5ml or 10ml
            $table->decimal('price', 10, 2); // Price in currency format
            $table->string('address');
            $table->string('phone_number');
            $table->enum('status', ['Pending', 'Approved', 'Paid'])->default('Pending'); // Enum type for status
            $table->enum('delivery_status', ['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'])->default('Pending');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refill_requests');
    }
};


