<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('business_category_id')->nullable();
            $table->string('company',255)->nullable();
            $table->string('store_url',255)->unique()->nullable();
            $table->string('logo',100)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',25)->nullable();
            $table->string('phone_ext',10)->nullable();
            $table->string('website',255)->nullable();
            $table->string('currency',3)->nullable();
            $table->string('address',255)->nullable();
            $table->string('district',100)->nullable();
            $table->string('province',100)->nullable();
            $table->string('postcode',100)->nullable();
            $table->string('description',255)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('line',100)->nullable();
            $table->boolean('isShow_map')->nullable();
            $table->string('google_map_latitude',15)->nullable();
            $table->string('google_map_longitude',15)->nullable();
            $table->string('mon_business_work',20)->nullable();
            $table->string('tue_business_work',20)->nullable();
            $table->string('wed_business_work',20)->nullable();
            $table->string('thu_business_work',20)->nullable();
            $table->string('fri_business_work',20)->nullable();
            $table->string('sat_business_work',20)->nullable();
            $table->string('sun_business_work',20)->nullable();
            $table->time('mon_business_hours_from')->nullable();
            $table->time('tue_business_hours_from')->nullable();
            $table->time('wed_business_hours_from')->nullable();
            $table->time('thu_business_hours_from')->nullable();
            $table->time('fri_business_hours_from')->nullable();
            $table->time('sat_business_hours_from')->nullable();
            $table->time('sun_business_hours_from')->nullable();
            $table->time('mon_business_hours_to')->nullable();
            $table->time('tue_business_hours_to')->nullable();
            $table->time('wed_business_hours_to')->nullable();
            $table->time('thu_business_hours_to')->nullable();
            $table->time('fri_business_hours_to')->nullable();
            $table->time('sat_business_hours_to')->nullable();
            $table->time('sun_business_hours_to')->nullable();
            $table->string('locale',45)->nullable();
            $table->boolean('is_deleted')->nullable();
            
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
        });
        Schema::create('businesses_staffs', function (Blueprint $table) {
            $table->integer('business_id')->nullable();
            $table->integer('staff_id')->nullable();
            $table->boolean('is_deleted')->nullable();
            
        });
        Schema::create('businesses_services', function (Blueprint $table) {
            $table->integer('business_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->boolean('is_deleted')->nullable();
        });
        Schema::create('businesses_categories', function (Blueprint $table) {
            $table->integer('business_category_id')->nullable();
            $table->integer('name')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('is_deleted')->nullable();
            
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
        });
    }
    public function down()
    {
        Schema::drop('businesses');
        Schema::drop('businesses_staffs');
        Schema::drop('businesses_services');
    }
}
