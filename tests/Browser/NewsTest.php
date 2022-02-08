<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test1Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('admin.news.create')
                    ->type('title', 'test')
                    ->type('description', 'description test')
                    ->type('body', 'bodyTest')
                    ->select('category_id', 1)
                    ->press('Save')
                    ->assertRouteIs('admin.news.index');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test2Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('admin.news.create')
                    ->type('title', '')
                    ->type('description', 'description test')
                    ->type('body', 'bodyTest')
                    ->select('category_id', 1)
                    ->press('Save')
                    ->assertSee('Поле Заголовок обязательно для заполнения.')
                    ->assertRouteIs('admin.news.create');
        });
    }
}
