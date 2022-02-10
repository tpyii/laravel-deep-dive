<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PrepareParsedNews
{
    /**
     * 
     * @var \Illuminate\Support\Collection
     */
    protected $items;

    /**
     * 
     * @param array $data
     * @return self
     */
    public function prepare($data)
    {
        $this->items = collect($data)->map(function ($item) {
            return $this->prepareFields($item);
        });

        return $this;
    }

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function validated()
    {
        $validated = $this->items->map(function ($item) {
            $validator = Validator::make($item, $this->rules());
        
            return $validator->fails()
                ? false
                : $validator->validated();
        });

        return $validated;
    }

    /**
     * 
     * @param array $item
     * @return array
     */
    private function prepareFields($item)
    {
        return [
            'title' => Str::limit($item['title'], 252),
            'slug' => Str::limit(Str::slug($item['title']), 252),
            'description' => Str::limit($item['description'], 252),
            'body' => Str::limit($item['description'], 252),
            'category_id' => mt_rand(1, 5),
        ];
    }

    /**
     * 
     * @return array
     */
    private function rules()
    {
        return [
            'title' => ['required', 'max:255'],
            'slug' => ['required_with:title', 'max:255'],
            'description' => ['required', 'max:255'],
            'body' => ['required'],
            'category_id' => ['required', 'integer', 'numeric', 'exists:categories,id'],
        ];
    }
}
