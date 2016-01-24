<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoreModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('icon');
            $table->string('color');
            $table->timestamps();
        });

        Schema::create('pois', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title', 60);
            $table->text('body');
            $table->text('thumb');
            $table->text('map_url');
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('submitted_by')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num');
            $table->string('title', 60);
            $table->text('body');
            $table->string('desc');
            $table->text('thumb');            
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('address');
            $table->string('lat',30);
            $table->string('lng', 30);
            $table->timestamps();
        });

        Schema::create('feeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',30);
            $table->text('url');
            $table->string('title');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('date');
            $table->time('time');
            $table->text('link');
            $table->text('descr');
            $table->text('thumb');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
        });

        Schema::create('logs',function(Blueprint $table){
            $table->increments('id');
            $table->morphs('loggable');
            $table->string('link');
            $table->integer('submitted_by')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('feeds_pois',function(Blueprint $table){
            $table->integer('feed_id')->unsigned();
            $table->foreign('feed_id')->references('id')->on('feeds');
            $table->integer('poi_id')->unsigned();
            $table->foreign('poi_id')->references('id')->on('pois');
        });
        Schema::create('feeds_pages',function(Blueprint $table){
            $table->integer('feed_id')->unsigned();
            $table->foreign('feed_id')->references('id')->on('feeds');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');
        });
        Schema::create('locations_pages',function(Blueprint $table){
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
