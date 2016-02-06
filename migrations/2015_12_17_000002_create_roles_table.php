<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64)->nullable();
            $table->string('description', 255);
            $table->string('role_type',45)->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
        });
    }
    public function down()
    {
        Schema::drop('roles');
    }
}