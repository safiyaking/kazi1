<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('categories_of_service');
            $table->unsignedBigInteger('owner_id');
            $table->string('reg_no');
            $table->date('year');
            $table->unsignedBigInteger('staffing_id');
            $table->string('licence_no');
            $table->unsignedBigInteger('doctor_incharge_id');
            $table->date('inspection_date');
            $table->date('license_reg_date');
            $table->string('service_delivery');
            $table->string('location');
            $table->string('phone_no');
            $table->string('status');

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
        Schema::dropIfExists('level');
    }
}
