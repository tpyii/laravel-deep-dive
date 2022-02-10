<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Services\Upload;

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
            'news' => News::paginate(),
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
     * @param  \App\Http\Requests\NewsRequest  $request
     * @param  \App\Services\Upload $uploader
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request, Upload $uploader)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $uploader->upload($request->file('image'), 'news', 'public');
        }

        return News::create($validated)
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
     * @param  \App\Http\Requests\NewsRequest  $request
     * @param  \App\Models\News $new
     * @param  \App\Services\Upload $uploader
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $new, Upload $uploader)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $uploader->upload($request->file('image'), 'news', 'public');
        }

        return $new->update($validated)
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
