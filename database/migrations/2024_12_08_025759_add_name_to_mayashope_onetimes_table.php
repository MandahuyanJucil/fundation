<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
          
            $table->string('name')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('birthday')->nullable(); 
            $table->string('age')->nullable(); 
            $table->string('phill_no')->nullable(); 
            $table->string('before_procedure_dianosis')->nullable(); 
            $table->string('date_of_discharge')->nullable(); 
            $table->string('surgeon')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('amount')->nullable(); 
            $table->string('paid_by')->nullable(); 
            $table->string('remarks')->nullable(); 

        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mayashope_onetimes', function (Blueprint $table) {
            $table->dropColumn('name')->nullable(); 
            $table->dropColumn('address')->nullable(); 
            $table->dropColumn('birthday')->nullable(); 
            $table->dropColumn('age')->nullable(); 
            $table->dropColumn('phill_no')->nullable(); 
            $table->dropColumn('before_procedure_dianosis')->nullable(); 
            $table->dropColumn('date_of_discharge')->nullable(); 
            $table->dropColumn('surgeon')->nullable(); 
            $table->dropColumn('description')->nullable(); 
            $table->dropColumn('amount')->nullable(); 
            $table->dropColumn('paid_by')->nullable(); 
            $table->dropColumn('remarks')->nullable(); 

        });
    }
};
