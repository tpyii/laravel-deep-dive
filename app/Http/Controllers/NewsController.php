<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Category|null $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category = null)
    {
        $news = $category ? $category->news()->paginate() : News::paginate();

        return view('news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\News $new
     * @return \Illuminate\Http\Response
     */
    public function show(News $new)
    {
        return view('news.show', [
            'item' => $new,
        ]);
    }
}
