<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('backend.about.index', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $data = $request->except(['image', 'icon']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = time() . '_img.' . $image->getClientOriginalExtension();
            $image->storeAs('about', $data['image'], 'public');
        }

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $data['icon'] = time() . '_icon.' . $icon->getClientOriginalExtension();
            $icon->storeAs('about', $data['icon'], 'public');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'About Section Updated');
    }
}

