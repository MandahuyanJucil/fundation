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
        Schema::table('chalices', function (Blueprint $table) {
          
            $table->string('grade_lvl')->nullable(); 
            $table->string('live_with')->nullable(); 
            $table->string('brothers')->nullable(); 
            $table->string('sisters')->nullable(); 
            $table->string('cooking_facility')->nullable(); 
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('school');
            $table->dropColumn('grade_lvl'); 
            $table->dropColumn('live_with'); 
            $table->dropColumn('brothers'); 
            $table->dropColumn('sisters'); 
            $table->dropColumn('cooking_facility'); 
        });
    }
};
