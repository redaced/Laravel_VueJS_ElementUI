<?php

use Illuminate\Database\Seeder;
use App\Model\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu();
        $menu->parent_id = 0;
        $menu->name = 'Нүүр';
        $menu->url = '/';
        $menu->icon = 'fa fa-home';
        $menu->color = '#555';
        $menu->slug = 'nuur';
        $menu->sort = 1;
        $menu->is_active = 1;
        $menu->save();

        $menu = new Menu();
        $menu->parent_id = 0;
        $menu->name = 'Тухай';
        $menu->url = '/';
        $menu->icon = 'fa fa-about';
        $menu->color = '#555';
        $menu->slug = 'tuhai';
        $menu->sort = 2;
        $menu->is_active = 1;
        $menu->save();
    }
}
