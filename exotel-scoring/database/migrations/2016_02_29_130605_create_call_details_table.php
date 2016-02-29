<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('_from');
            $table->string('_to');
            $table->string('quiz_name');
            $table->string('call_id');
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
        Schema::drop('call_details');
    }
}
