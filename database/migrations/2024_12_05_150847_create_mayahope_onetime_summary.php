<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mayahope_onetime_summary', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY
            $table->string('description'); 
            $table->string('amount'); 
            $table->string('paid_by'); 
            $table->string('remarks'); 
            $table->string('child_id'); 
            $table->timestamps(); // CREATED_AT & UPDATED_AT COLUMNS
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mayahope_onetime_summary');
    }
};
