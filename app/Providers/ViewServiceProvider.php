<?php
namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Services\MenuService;
use Illuminate\Support\ServiceProvider;
use App\Models\VisualEdit;
class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(['frontend.layouts.template','backend.visualeditor.layouts.template'], function ($view) {
            $menus = app(MenuService::class)->getMenuTree('main');
            $footerVisuals = VisualEdit::where('section', 'footer')->pluck('value', 'key');
            $headerVisuals = VisualEdit::where('section', 'header')->pluck('value', 'key');
            $view->with([
                'menus' => $menus,
                'footerVisuals' => $footerVisuals,
                'headerVisuals' => $headerVisuals,
            ]);
            
        });
    }
}