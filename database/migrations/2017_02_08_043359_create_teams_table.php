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
            $table->string('member1');
            $table->string('member2');
            $table->string('member3');
            $table->string('member4');
            $table->string('member5');
            $table->string('member6');
            $table->string('member7');
            $table->string('member8');
            $table->int('count')->default(0);

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
