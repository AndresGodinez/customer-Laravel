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
            $table->integer('estimation_id')->unsigned();
            $table->integer('treatment_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->timestamps();

            // References

            $table->foreign('estimation_id')->references('id')->on('estimations')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('treatment_id')->references('id')->on('treatments')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

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
