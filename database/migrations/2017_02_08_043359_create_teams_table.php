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
            $table->string('member2')->nullable();
            $table->string('member3')->nullable();
            $table->string('member4')->nullable();
            $table->string('member5')->nullable();
            $table->string('member6')->nullable();
            $table->string('member7')->nullable();
            $table->string('member8')->nullable();
            $table->integer('count')->default(0);

            $table->timestamps();
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
