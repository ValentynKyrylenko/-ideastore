<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tagads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('name');
		});

        Schema::create('ad_tagad', function(Blueprint $table)
        {
            $table->integer('ad_id')->unsigned()->nullable()->index();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->integer('tagad_id')->unsigned()->nullable()->index();
            $table->foreign('tagad_id')->references('id')->on('tagads')->onDelete('cascade');
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
		Schema::drop('tagads');
        Schema::drop('ad_tagad');
	}

}
