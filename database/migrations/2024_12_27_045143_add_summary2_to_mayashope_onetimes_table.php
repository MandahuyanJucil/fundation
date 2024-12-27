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
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
          
            $table->string('summary2')->nullable(); 
            $table->string('summary3')->nullable(); 
            $table->string('summary4')->nullable(); 
            $table->string('summary5')->nullable(); 
            $table->string('summary6')->nullable(); 
             
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
            $table->dropColumn('summary2'); 
            $table->dropColumn('summary3'); 
            $table->dropColumn('summary4'); 
            $table->dropColumn('summary5'); 
            $table->dropColumn('summary6'); 
    
        });
    }
};