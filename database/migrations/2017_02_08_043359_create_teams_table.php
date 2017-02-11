<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name')->unique();
            $table->integer('member1');
            $table->integer('member2');
            $table->integer('member3');
            $table->integer('member4');
            $table->integer('member5');
            $table->integer('member6');
            $table->integer('member7');
            $table->integer('member8');
            $table->integer('count')->default(0);

            $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
