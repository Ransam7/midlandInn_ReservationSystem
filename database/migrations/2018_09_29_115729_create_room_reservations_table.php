<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_type_id');
            $table->integer('room_id');
            $table->integer('numb_of_room');
            $table->time('est_time_arrival');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->decimal('payment', 8, 2);
            $table->dateTime('transac_date');
            $table->string('transac_employee');
            $table->integer('transac_code');
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
        // Schema::dropIfExists('room_reservations');
    }
}
