<?php

use Modules\Menu\Entities\Menu;
if (!function_exists('getMenus')){
    function getMenus()
    {
        return Menu::with('subMenus')->whereNull('main_menu')->get();
    }
}
