<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\Menu;

class MenuDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Menu::create([
            'name' => 'Dashboard',
            'code' => 'dashboard',
            'url' => '/',
            'main_menu' => null,
            'icon' => 'bi bi-grid-fill'
        ]);
        $master = Menu::create([
            'name' => 'Master',
            'code' => 'master',
            'url' => '',
            'main_menu' => null,
            'icon' => 'bi bi-justify-left',
            'menu_hassub' => 1,
        ]);
        Menu::create([
            'name' => 'Blog',
            'code' => 'blog',
            'url' => 'blog',
            'main_menu' => $master->id,
            'icon' => 'bi bi-home'
        ]);
        // $this->call("OthersTableSeeder");
    }
}
