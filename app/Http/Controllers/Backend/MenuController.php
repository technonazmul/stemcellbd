<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with(['parent', 'children'])
            ->orderBy('location')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('location');

        return view('backend.menus.index', compact('menus'));
    }

    public function create()
    {
        $parentMenus = Menu::whereNull('parent_id')->orderBy('title')->get();
        $availableRoutes = $this->getAvailableRoutes();

        return view('backend.menus.create', compact('parentMenus', 'availableRoutes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:custom,route,category,page',
            'location' => 'required|string',
            'url' => 'nullable|string',
            'route_name' => 'nullable|string',
            'route_params' => 'nullable|array',
            'target' => 'required|in:_self,_blank',
            'css_class' => 'nullable|string',
            'icon_class' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean'
        ]);

        // Get the next sort order if not provided
        if (!$request->sort_order) {
            $maxOrder = Menu::where('parent_id', $request->parent_id)
                ->where('location', $request->location)
                ->max('sort_order');
            $request->merge(['sort_order' => $maxOrder + 1]);
        }

        Menu::create($request->all());

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu item created successfully!');
    }

    public function show(Menu $menu)
    {
        return view('backend.menus.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        $parentMenus = Menu::whereNull('parent_id')
            ->where('id', '!=', $menu->id)
            ->orderBy('title')
            ->get();
        $availableRoutes = $this->getAvailableRoutes();

        return view('backend.menus.edit', compact('menu', 'parentMenus', 'availableRoutes'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:custom,route,category,page',
            'location' => 'required|string',
            'url' => 'nullable|string',
            'route_name' => 'nullable|string',
            'route_params' => 'nullable|array',
            'target' => 'required|in:_self,_blank',
            'css_class' => 'nullable|string',
            'icon_class' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean'
        ]);

        // Prevent setting parent to itself or its children
        if ($request->parent_id == $menu->id) {
            return back()->withErrors(['parent_id' => 'A menu cannot be its own parent.']);
        }

        $menu->update($request->all());

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu item updated successfully!');
    }

    public function destroy(Menu $menu)
    {
        // Delete children first
        $menu->children()->delete();
        $menu->delete();

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu item deleted successfully!');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|exists:menus,id',
            'items.*.sort_order' => 'required|integer',
            'items.*.parent_id' => 'nullable|exists:menus,id'
        ]);

        foreach ($request->items as $item) {
            Menu::where('id', $item['id'])->update([
                'sort_order' => $item['sort_order'],
                'parent_id' => $item['parent_id']
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function toggleStatus(Menu $menu)
    {
        $menu->update(['is_active' => !$menu->is_active]);

        return response()->json([
            'success' => true,
            'status' => $menu->is_active
        ]);
    }

    private function getAvailableRoutes()
    {
        $routes = [];
        $routeCollection = Route::getRoutes();

        foreach ($routeCollection as $route) {
            if ($route->getName() && !str_starts_with($route->getName(), 'admin.')) {
                $routes[$route->getName()] = $route->getName();
            }
        }

        return $routes;
    }
}