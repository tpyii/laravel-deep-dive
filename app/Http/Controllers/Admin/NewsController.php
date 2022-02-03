<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'description',
            'body',
            'category_id'
        ]);

        $data['slug'] = Str::slug($data['title']);

        return News::create($data)
            ? redirect()->route('admin.news.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News $new
     * @return \Illuminate\Http\Response
     */
    public function edit(News $new)
    {
        return view('admin.news.edit', [
            'item' => $new,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News $new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $new)
    {
        $data = $request->only([
            'title',
            'description',
            'body',
            'category_id'
        ]);

        $data['slug'] = Str::slug($data['title']);

        return $new->update($data)
            ? redirect()->route('admin.news.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News $new
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $new)
    {
        return $new->delete()
            ? redirect()->route('admin.news.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }
}
