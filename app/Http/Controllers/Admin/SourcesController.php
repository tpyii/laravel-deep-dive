<?php

namespace App\Http\Controllers\Admin;

use App\Models\Source;
use App\Http\Controllers\Controller;
use App\Http\Requests\SourcesRequest;

class SourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sources.index', [
            'sources' => Source::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SourcesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SourcesRequest $request)
    {
        $validated = $request->validated();

        return Source::create($validated)
            ? redirect()->route('admin.sources.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        return view('admin.sources.edit', [
            'item' => $source,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SourcesRequest  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(SourcesRequest $request, Source $source)
    {
        $validated = $request->validated();

        return $source->update($validated)
            ? redirect()->route('admin.sources.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        return $source->delete()
            ? redirect()->route('admin.sources.index')->with('success', 'Success')
            : back()->withInput()->withErrors('Unexpected error');
    }
}
