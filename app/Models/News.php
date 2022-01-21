<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getNews()
    {
        return DB::table($this->table)
                ->select('title', 'slug', 'description', 'image', 'created_at')
                ->get();
    }

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getNewsAdmin()
    {
        return DB::table($this->table)
                ->select('news.id', 'news.title', 'news.description', 'news.author', 'news.status', 'categories.title as category_title', 'news.created_at', 'news.updated_at')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->get();
    }

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getNewsBySlug(string $slug)
    {
        return DB::table($this->table)
                ->select('news.title', 'news.body', 'categories.title as category_title', 'categories.slug as category_slug')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->where('news.slug', $slug)
                ->first();
    }

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getNewsByCategorySlug(string $slug)
    {
        return DB::table($this->table)
                ->select('news.title', 'news.slug', 'news.description', 'news.image', 'news.created_at')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->where('categories.slug', $slug)
                ->get();
    }
}
