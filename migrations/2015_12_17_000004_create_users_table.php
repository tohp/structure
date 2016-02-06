<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',128)->nullable();
            $table->string('password',128)->nullable();
            $table->string('email',256)->nullable();
            $table->integer('role_id')->nullable();
            $table->string('firstname',255)->nullable();
            $table->string('lastname',255)->nullable();
            $table->string('country',64)->nullable();
            $table->string('locale',256)->nullable();
            $table->string('token',256)->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamp('exp_token')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('session',512)->nullable();
            $table->string('num_failed',10)->nullable();
            $table->timestamp('last_login')->nullable();

            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
            
        });
    }
    public function down()
    {
        Schema::drop('users');
    }
}
