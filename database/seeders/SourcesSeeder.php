<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData(10));
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
                'url' => $faker->url(),
                'created_at' => $faker->dateTime(),
            ];
        }

        return $data;
    }
}
