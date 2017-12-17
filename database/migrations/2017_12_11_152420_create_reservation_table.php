<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserver', function (Blueprint $table) {
            $table->date('finperiode');
            $table->integer('id_users')->unsigned()->foreign('id_users')->references('id')->on('users');
            $table->integer('id_place')->unsigned()->foreign('id_place')->references('idplace')->on('places');
            $table->date('debutperiode')->foreign('debutperiode')->references('debutperiode')->on('periode');
            $table->primary(array('id_users', 'id_place', 'debutperiode'));
             $table->boolean('valider')->default(0);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserver');
    }
}
