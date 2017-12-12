<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu;

class MenuController extends Controller
{
    public function getMenus(Request $request)
    {
        $menus = Menu::where('is_active',true)->orderBy('sort','asc')->get();
        return $menus->toJson();
    }
}
