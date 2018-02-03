<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('telephone')->nullable();
            $table->file('photo')->nullable();
            $table->enum('bloodType', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-'])->nullable();
            $table->string('alergy')->nullable();
            $table->timestamps();

            // References
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
