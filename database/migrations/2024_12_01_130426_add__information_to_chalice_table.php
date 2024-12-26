<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('chalices', function (Blueprint $table) {
        $table->string('Contact_Person'); 
        $table->string('Relation'); 
        $table->string('Contact_Information'); 
        $table->string('Phone_Number'); 
        $table->string('Running_Water'); 
        $table->string('Electricity'); 
        $table->string('Latrine'); 
        $table->string('Walls'); 
        $table->string('Floor'); 
        $table->string('No_of_Rooms'); 
        $table->string('Child_History_of_Diagnosis'); 
        $table->string('Current_Condition_of_the_Child'); 
        $table->string('Additional_Notes'); 
        $table->string('Prepared_by'); 
    });
}

public function down()
{
    Schema::table('chalice', function (Blueprint $table) {
        $table->dropColumn('Contact_Person'); 
        $table->dropColumn('Relation'); 
        $table->dropColumn('Contact_Information'); 
        $table->dropColumn('Phone_Number'); 
        $table->dropColumn('Running_Water'); 
        $table->dropColumn('Electricity'); 
        $table->dropColumn('Latrine'); 
        $table->dropColumn('Walls'); 
        $table->dropColumn('Floor'); 
        $table->dropColumn('No_of_Rooms'); 
        $table->dropColumn('Child_History_of_Diagnosis'); 
        $table->dropColumn('Current_Condition_of_the_Child'); 
        $table->dropColumn('Additional_Notes'); 
        $table->dropColumn('Prepared_by'); 
    });
}

};
