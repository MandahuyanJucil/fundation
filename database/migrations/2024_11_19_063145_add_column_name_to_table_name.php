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
        $table->string('status')->after('fname')->nullable(); // Adjust 'dataType' and options as needed
    });
}

public function down()
{
    Schema::table('chalices', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
