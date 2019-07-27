<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinate1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinate1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coordinate_id');
            $table->string('coordinate_fname');
            $table->string('coordinate_lname');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('dof');
            $table->string('country');
            $table->string('address');
            $table->string('gender');
            $table->string('biography');
            $table->string('status');
            $table->mediumText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinate1s');
    }
}
