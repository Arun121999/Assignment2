<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->after('email');
            $table->string('gender')->after('image');
            $table->string('location')->after('gender');
            $table->string('date_of_birth')->after('location');
            $table->string('mobile_no')->after('date_of_birth');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['image',  'gender', 'location', 'date_of_birth', 'mobile_no']);
        });
    }
}
