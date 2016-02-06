<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('staffs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',50)->nullable();
            $table->string('mobile',25)->nullable();
            $table->string('email',50)->nullable();
            $table->string('position',100)->nullable();
            
            $table->timestamps();
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            
        });
    }

    public function down()
    {
        Schema::drop('staffs');
    }
}
