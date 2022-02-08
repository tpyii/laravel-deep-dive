<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\YandexNewsRss;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  App\Services\YandexNewsRss  $rss
     * @return \Illuminate\Http\Response
     */
    public function __invoke(YandexNewsRss $rss)
    {
        dd($rss->parse('computers.rss'));
    }
}
