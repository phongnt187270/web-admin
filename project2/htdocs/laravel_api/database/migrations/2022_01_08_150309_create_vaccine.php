<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->string('vaccine_id');
            $table->string('number');
            $table->date('injected_date');
            $table->string('injected_location');
            $table->string('cargo_number');
            $table->primary('vaccine_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine');
    }
}
