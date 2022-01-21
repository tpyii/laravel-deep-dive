<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getCategories()
    {
        return DB::table($this->table)
                ->select('title', 'slug')
                ->get();
    }

    /**
     * 
     * @return \Illuminate\Support\Collection
     */
    public function getCategoriesAdmin()
    {
        return DB::table($this->table)->get();
    }
}
