<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoomReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_reservation', function (Blueprint $table) {
            // $table->time('est_time_arrival')->change();
            // $table->date('check_in_date')->change();
            // $table->date('check_out_date')->change();
            // $table->decimal('payment', 8, 2)->change();
            // $table->dateTime('transac_date')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
