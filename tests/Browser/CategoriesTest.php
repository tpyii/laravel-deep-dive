<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoriesTest extends DuskTestCase
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
            $browser->visitRoute('admin.categories.create')
                    ->type('title', 'test')
                    ->press('Save')
                    ->assertRouteIs('admin.categories.index');
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
            $browser->visitRoute('admin.categories.create')
                    ->type('title', '')
                    ->press('Save')
                    ->assertSee('Поле Заголовок обязательно для заполнения.')
                    ->assertRouteIs('admin.categories.create');
        });
    }
}
