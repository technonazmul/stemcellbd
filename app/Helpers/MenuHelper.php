<?php
use Illuminate\Support\Facades\Route;

function getMenuUrl($menu)
{
    switch ($menu->type) {
        case 'custom':
            return $menu->url ?? '#';
        case 'route':
            return route($menu->route_name, json_decode($menu->route_params ?? '[]', true));
        case 'category':
            return route('show_services', $menu->route_params);
        case 'page':
            return route('pages.public', $menu->route_params);
        default:
            return '#';
    }
}
