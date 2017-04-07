<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('label');
            $table->string('color', 7);
            $table->softDeletes();
        });

        DB::table('status_types')->insert([
            'label' => 'In',
            'color' => '#76e076'
        ]);

        DB::table('status_types')->insert([
            'label' => 'Out',
            'color' => '#eeb4b4'
        ]);

        DB::table('status_types')->insert([
            'label' => 'Meeting',
            'color' => '#f8e1e1'
        ]);

        DB::table('status_types')->insert([
            'label' => 'Home',
            'color' => '#b4eeb4'
        ]);

        DB::table('status_types')->insert([
            'label' => '–',
            'color' => '#fafafa'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_types');
    }
}
