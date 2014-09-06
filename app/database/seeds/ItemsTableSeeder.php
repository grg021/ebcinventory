<?php

use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$cats = Category::lists('id');
		//$tagIds = Tag::lists('id');

		foreach(range(1, 100) as $index)
		{
			$item = new Item;
			$item->name = $faker->word();
			$item->code = $faker->ean8();
			$item->location = $faker->city();
			$item->amount = $faker->randomFloat(2);
			$item->quantity = $faker->randomNumber(3);
			$item->category_id = $faker->randomElement($cats);
			$item->lifespan = $faker->randomNumber();
			$item->datepurchased = $faker->date();
			$item->save();
		}
	}
}