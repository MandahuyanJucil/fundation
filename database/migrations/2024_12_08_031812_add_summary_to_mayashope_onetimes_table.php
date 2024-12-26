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
          
            
            $table->string('2_description')->nullable(); 
            $table->string('2_amount')->nullable(); 
            $table->string('2_paid_by')->nullable(); 
            $table->string('2_remarks')->nullable(); 
            
            $table->string('3_description')->nullable(); 
            $table->string('3_amount')->nullable(); 
            $table->string('3_paid_by')->nullable(); 
            $table->string('3_remarks')->nullable(); 
            
            $table->string('4_description')->nullable(); 
            $table->string('4_amount')->nullable(); 
            $table->string('4_paid_by')->nullable(); 
            $table->string('4_remarks')->nullable(); 
            
            $table->string('5_description')->nullable(); 
            $table->string('5_amount')->nullable(); 
            $table->string('5_paid_by')->nullable(); 
            $table->string('5_remarks')->nullable(); 
            
            $table->string('6_description')->nullable(); 
            $table->string('6_amount')->nullable(); 
            $table->string('6_paid_by')->nullable(); 
            $table->string('6_remarks')->nullable(); 

        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
            $table->string('2_description')->nullable(); 
            $table->string('2_amount')->nullable(); 
            $table->string('2_paid_by')->nullable(); 
            $table->string('2_remarks')->nullable(); 
            
            $table->string('3_description')->nullable(); 
            $table->string('3_amount')->nullable(); 
            $table->string('3_paid_by')->nullable(); 
            $table->string('3_remarks')->nullable(); 
            
            $table->string('4_description')->nullable(); 
            $table->string('4_amount')->nullable(); 
            $table->string('4_paid_by')->nullable(); 
            $table->string('4_remarks')->nullable(); 
            
            $table->string('5_description')->nullable(); 
            $table->string('5_amount')->nullable(); 
            $table->string('5_paid_by')->nullable(); 
            $table->string('5_remarks')->nullable(); 
            
            $table->string('6_description')->nullable(); 
            $table->string('6_amount')->nullable(); 
            $table->string('6_paid_by')->nullable(); 
            $table->string('6_remarks')->nullable(); 

        });
    }
};
