<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstNames');
            $table->string('LastName');
            $table->bigInteger('idNumber');
            $table->date('DateOfBirth');
            $table->bigInteger('ContactNumber');
            $table->string('Shaft');
            $table->string('MedicalAid');
            $table->bigInteger('MedicalNumber');
            $table->string('Gender');
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
        Schema::dropIfExists('registrations');
    }
}
