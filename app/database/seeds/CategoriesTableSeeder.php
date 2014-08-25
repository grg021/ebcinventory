<?php

use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		//$lessonsIds = Lesson::lists('id');
		//$tagIds = Tag::lists('id');

		foreach(range(1, 10) as $index)
		{
			$cat = new Category;
			$cat->name = $faker->word();
			$cat->description = $faker->sentence();
			$cat->save();
		}
	}
}