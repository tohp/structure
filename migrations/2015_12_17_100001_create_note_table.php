<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('transaction_item_id')->nullable();
            $table->text('note')->nullable();
            $table->string('file_path',500)->nullable();
            $table->string('file_type',100)->nullable();
            $table->string('original_filename')->nullable();
            $table->boolean('is_deleted')->nullable();
            
            $table->timestamps();
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('note');
    }
}
