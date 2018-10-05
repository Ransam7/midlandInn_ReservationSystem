<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_type_id');
            $table->integer('room_id');
            $table->timeTz('est_time_arrival');
            $table->timestampTz('check_in_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('check_out_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('payment');
            $table->integer('numb_of_room');
            $table->string('transac_employee');
            $table->timestamp('transac_date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('room_reservation');
    }
}
