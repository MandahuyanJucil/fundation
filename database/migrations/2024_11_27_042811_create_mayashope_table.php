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
        Schema::create('mayashope', function (Blueprint $table) {
            $table->id(); 
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
         


            $table->timestamps(); // CREATED_AT AND UPDATED_AT COLUMNS
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mayashope');
    }
};
