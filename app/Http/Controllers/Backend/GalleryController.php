<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
   public function index()
    {
        $galleries = Gallery::all();
        return view('backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gallery = new Gallery();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newFilename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('gallery', $newFilename, 'public');
            $gallery->image = $newFilename;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete image file from storage
        Storage::disk('public')->delete('gallery/' . $gallery->image);
        $gallery->delete();

        return redirect()->route('backend.gallery.index')->with('success', 'Image deleted successfully.');
    }
}
