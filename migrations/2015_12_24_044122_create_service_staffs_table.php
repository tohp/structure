<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_staffs', function(Blueprint $table)
        {
            $table->increments('staff_id');
            $table->integer('service_id')->nullable();
            $table->boolean('is_deleted')->nullable();
        });
        Schema::create('services', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description',45)->nullable();
            $table->decimal('price')->nullable();
            $table->integer('duration')->nullable();
            $table->boolean('is_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_staffs');
        Schema::drop('services');
    }
}
