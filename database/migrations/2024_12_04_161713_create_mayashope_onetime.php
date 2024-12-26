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
        Schema::create('mayashope_onetime', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY
            $table->timestamps(); // CREATED_AT & UPDATED_AT COLUMNS
            $table->string('guardian');
            $table->string('contact_details');
            $table->string('procedure');
            $table->string('no_of_surgery_done');
            $table->string('date_of_admission');
            $table->string('date_of_surgery');
            $table->string('anesthesislologist');
            $table->string('additional_doctors');
            $table->string('post_op_Notes');
            $table->string('additional_notes');
            $table->string('Admin_notes');
            
           
                
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mayashope_onetime');
    }
};
