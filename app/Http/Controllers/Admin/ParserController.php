<?php

namespace App\Http\Controllers\Admin;

use App\Models\Source;
use App\Jobs\ParsingSource;
use App\Http\Controllers\Controller;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        Source::all()->each(function ($item) {
            ParsingSource::dispatch($item);
        });

        return redirect()->route('admin.sources.index')->with('success', 'Success');
    }
}
