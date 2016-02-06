<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('business_id')->nullable();
            $table->string('primary_firsname',100)->nullable();
            $table->string('primary_lastname',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('phone2',20)->nullable();
            $table->string('email',50)->nullable();
            $table->integer('is_deleted')->nullable();
            
            $table->timestamps();
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            
        });

        Schema::create('transaction_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('transaction_id')->nullable();
            $table->integer('staffs_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->string('customer_name',45)->nullable();
            $table->string('description')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('duration')->nullable();
            $table->timestamp('service_start');
            $table->timestamp('service_end');
            $table->string('is_primary',45)->nullable();
            
        });
    }
    public function down()
    {
        Schema::drop('transactions');
        Schema::drop('transaction_items');
    }
}
