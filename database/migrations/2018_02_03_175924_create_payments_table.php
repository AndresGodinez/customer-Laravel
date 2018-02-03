<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->int('patient_id')->unsigned();
            $table->int('estimation_id')->unsigned();
            $table->float('amount', 10, 2);
            $table->string('comment');
            $table->timestamps();

            // References
            $table->foreign('patient_id')->references('id')->on('patients')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('estimation_id')->references('id')->on('estimations')
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
        Schema::dropIfExists('payments');
    }
}
