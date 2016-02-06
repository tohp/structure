<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_id')->nullable();
            $table->integer('object_type')->nullable();
            $table->string('description',250)->nullable();
            $table->timestamp('from')->nullable();
            $table->timestamp('to')->nullable();
            $table->boolean('is_deleted')->nullable();

            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');


        });
    }
    public function down()
    {
        Schema::drop('holidays');
    }
}
