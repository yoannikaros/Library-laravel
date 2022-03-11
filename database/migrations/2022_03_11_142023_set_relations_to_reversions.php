<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetRelationsToReversions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reversions', function (Blueprint $table) {
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reversions', function (Blueprint $table) {
            //
        });
    }
}
