<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamp('published_at');
            $table->string('title');
            $table->text('body');
            $table->string('condition');
            $table->string('image');
            $table->text('location');
            $table->text('post');
            $table->integer('price')->unsigned()->nullable();
            $table->text('phone');
            $table->boolean('confirmed', false);
            $table->integer('rating')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ads');
	}

}
