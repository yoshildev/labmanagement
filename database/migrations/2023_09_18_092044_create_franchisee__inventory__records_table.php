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
        Schema::create('franchisee_inventory_records', function (Blueprint $table) {
            $table->id();
            $table->integer('franchiseeId');
            $table->integer('quantity');    
            $table->integer('productId');    
            $table->enum('status',['accepted','rejected','onTheWay']);
            $table->string('trackingId')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franchisee_inventory_records');
    }
};
