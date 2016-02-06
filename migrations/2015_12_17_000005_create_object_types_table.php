<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectTypesTable extends Migration
{
    
    public function up()
    {
        Schema::create('object_types', function (Blueprint $table) {
            $table->char('id',2);
            $table->string('object_type_name',100)->nullable();

//            $table->primary('id');
            
        });

        Schema::create('file_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_id')->nullable();
            $table->char('object_type_id',2)->nullable();
            $table->text('file_desc')->nullable();
            $table->string('file_path',500)->nullable();
            $table->string('file_type',255)->nullable();
            $table->string('content_type',45)->nullable();// Single / Group / Gallery
            $table->string('original_filename',45)->nullable();

            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
            
        });
    }
    public function down()
    {
        Schema::drop('object_types');
        Schema::drop('file_attachments');
    }
}
