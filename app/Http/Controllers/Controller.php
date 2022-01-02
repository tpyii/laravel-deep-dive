<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private array $categories;
    private array $news;

    /**
     * 
     * @param int $length
     * @param int $start
     * @return array
     */
    private function createCategories(int $length): array
    {
        $faker = Faker::create();

        for ($i = 1; $i < $length; $i++) {
            $this->categories[] = [
                'id' => $i,
                'title' => $faker->word(),
            ];
        }

        return $this->categories;
    }

    /**
     * 
     * @param int $length
     * @return array
     */
    private function createNews(int $length): array
    {
        $faker = Faker::create();

        for ($i = 1; $i < $length; $i++) {
            $this->news[] = [
                'id' => $i,
                'title' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'body' => $faker->text(),
                'category' => $faker->randomElement($this->categories),
            ];
        }

        return $this->news;
    }

    /**
     * 
     * @return void
     */
    private function createData(): void
    {
        $this->createCategories(6);
        $this->createNews(20);
    }

    /**
     * 
     * @return array
     */
    protected function getCategories(): array
    {
        $this->createData();

        return $this->categories;
    }

    /**
     * 
     * @return array
     */
    protected function getNews(): array
    {
        $this->createData();

        return $this->news;
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    protected function getNewsByCategoryId(int $id): array
    {
        $this->createData();

        return Arr::where($this->news, fn ($value) => $value['category']['id'] === $id);
    }

    /**
     * 
     * @param int $id
     * @return array
     */
    protected function getNewsById(int $id): array
    {
        $this->createData();

        return Arr::first(Arr::where($this->news, fn ($value) => $value['id'] === $id));
    }
}
