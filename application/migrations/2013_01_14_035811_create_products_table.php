<?php

class Create_Products_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products', function($table) { /* @var $table Laravel\Database\Schema\Table */
		    $table->increments('id');
		    $table->string('type', 10);
		    $table->string('name', 150);
		    $table->float('price')->unsigned()->default(0.00);
            $table->boolean('sold')->default(FALSE);
            $table->string('thumb', 200)->nullable()->default(NULL);
            $table->string('image', 200)->nullable()->default(NULL);
		    $table->timestamps();   
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('products');
	}

}