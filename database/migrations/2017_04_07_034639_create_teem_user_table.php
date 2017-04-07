<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeemUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teem_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teem_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('teem_id')->references('id')->on('teems');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teem_user');
    }
}
