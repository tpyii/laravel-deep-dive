<?php

namespace App\Providers;

use App\Services\CbrRss;
use App\Contracts\Parser;
use App\Contracts\Social;
use App\Services\SocialAuth;
use App\Services\YandexNewsRss;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Parser::class, YandexNewsRss::class);
        $this->app->bind(Parser::class, CbrRss::class);
        $this->app->bind(Social::class, SocialAuth::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
