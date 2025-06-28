<?php
namespace App\Services;

use App\Models\Menu;

class MenuService
{
    public function getMenuTree($location = 'main', $parentId = null)
    {
        $menus = Menu::where('location', $location)
            ->where('is_active', 1)
            ->where('parent_id', $parentId)
            ->orderBy('sort_order')
            ->get();

        foreach ($menus as $menu) {
            $menu->children = $this->getMenuTree($location, $menu->id);
        }

        return $menus;
    }
}

