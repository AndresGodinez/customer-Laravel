<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstimationTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimations_treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->int('estimation_id')->unsigned();
            $table->int('treatment_id')->unsigned();
            $table->int('quantity')->unsigned();
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
        Schema::dropIfExists('estimations_treatments');
    }
}
