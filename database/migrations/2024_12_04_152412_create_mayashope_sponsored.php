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
        Schema::create('mayashope_sponsored', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY
            $table->timestamps(); // CREATED_AT & UPDATED_AT COLUMNS
            $table->string('Sponsor');
            $table->string('dateofbirth');
            $table->string('nameofchild');
            $table->string('school');
            $table->string('address');
            $table->string('Grade');
            $table->string('sub-site');
            $table->string('gender');
            $table->string('reilogion');
            $table->string('fathername');
            $table->string('father_occupation');
            $table->string('mothername');
            $table->string('mother_occupation');
            $table->string('father_income');
            $table->string('mother_income');
            $table->string('mother_employment');
            $table->string('father_employment');
            $table->string('evaluation');
            $table->string('status'); 
            $table->string('pwd_no');
            $table->string('hobby');
                
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mayashope_sponsored');
    }
};
