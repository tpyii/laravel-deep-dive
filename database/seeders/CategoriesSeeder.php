<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData(5));
    }

    /**
     * 
     * @param int $length
     * @return array
     */
    private function getData(int $length): array
    {
        $faker = Faker::create();

        for ($i = 0; $i < $length; $i++) {
            $data[] = [
                'title' => $faker->word(),
                'slug' => $faker->slug(),
                'description' => $faker->text(),
                'created_at' => $faker->dateTime(),
            ];
        }

        return $data;
    }
}
