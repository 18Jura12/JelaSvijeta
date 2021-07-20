<?php

use App\Category;
use App\Ingredient;
use App\Meal;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Category::truncate();
        Tag::truncate();
        Ingredient::truncate();
        Meal::truncate();
        DB::table('meal_tag')->truncate();

        $categoryQuantity = 5;
        $tagQuantity = 100;
        $ingredientQuantity = 300;
        $mealQuantity = 50;

        factory(Category::class, $categoryQuantity)->create();
        factory(Tag::class, $tagQuantity)->create();
        factory(Ingredient::class, $ingredientQuantity)->create();
        factory(Meal::class, $mealQuantity)->create()->each(
            function ($meal) {
                $tags = Tag::all()->random(mt_rand(1, 5))->pluck('id');
                $meal->tags()->attach($tags);
            }
        );
    }
}
