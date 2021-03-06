<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('theme_tag', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('theme_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('theme_tag');
	}

}
