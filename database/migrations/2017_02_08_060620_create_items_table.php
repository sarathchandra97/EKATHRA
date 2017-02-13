<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->unique();
            //Can be event,workshop,culturals
            $table->string('category');
            //Can be cultural/fest names
            $table->string('fest');
            //NA for cultral else department name for correspoding fest
            $table->string('department');
            //event name
            $table->string('name');
            $table->integer('count');

            $table->string('intro');
            $table->text('description');
            $table->text('conditions');
            $table->string('contact');
            
            $table->string('image');
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
        Schema::drop('items');
    }
}
