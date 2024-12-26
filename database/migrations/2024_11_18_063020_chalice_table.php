<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('chalice', function (Blueprint $table) {
            $table->id();
            $table->string('YEARSTARTED');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('age');
            $table->string('fname');
            $table->string('status');
            $table->string('address');
            $table->string('religion');
            $table->string('hobbies');
            $table->string('diagnosis');
            $table->string('mothername');
            $table->string('mother_occupation');
            $table->string('fathername');
            $table->string('father_occupation');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('chalice');
    }
};
