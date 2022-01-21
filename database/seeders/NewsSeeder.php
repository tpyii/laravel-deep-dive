<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData(10));
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
                'category_id' => mt_rand(1, 5),
                'title' => $faker->sentence(),
                'slug' => $faker->slug(),
                'description' => $faker->paragraph(),
                'body' => $faker->text(),
                'image' => $faker->imageUrl(),
                'created_at' => $faker->dateTime(),
            ];
        }

        return $data;
    }
}
