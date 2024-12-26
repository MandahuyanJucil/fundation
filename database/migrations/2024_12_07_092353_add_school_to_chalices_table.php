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
            $table->string('school');
            $table->string('grade_lvl'); 
            $table->string('live_with'); 
            $table->string('brothers'); 
            $table->string('sisters'); 
            $table->string('cooking_facility'); 
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
