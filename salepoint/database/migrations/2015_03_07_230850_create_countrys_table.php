<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountrysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return voidcd
	 */
	public function up()
	{
		Schema::create('countrys', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',50);
            $table->integer('code')->nullable();
            $table->string('abbreviation')->nullable();
            $table->softDeletes();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
     * 
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countrys');
	}

}
