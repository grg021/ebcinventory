<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code');
			$table->string('name')->nullable();
			$table->string('location')->nullable();
			$table->text('description')->nullable();
			$table->float('amount')->default(0);
			$table->integer('quantity')->default(0);
			$table->integer('lifespan')->default(0);
			$table->date('datepurchased')->nullable();
			$table->integer('category_id');
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
		Schema::drop('items');
	}

}
