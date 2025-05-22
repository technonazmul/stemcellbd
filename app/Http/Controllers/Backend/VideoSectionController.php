<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VideoSection;
use Illuminate\Http\Request;

class VideoSectionController extends Controller
{
    public function index()
    {
        $videos = VideoSection::all();
        return view('backend.video.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.video.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20000',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'stat1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stat1_number' => 'nullable|string|max:50',
            'stat1_text' => 'nullable|string|max:255',
            'stat2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stat2_number' => 'nullable|string|max:50',
            'stat2_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'button_text' => 'nullable|string|max:255',
        ]);

        // Handle uploads
        if ($request->hasFile('thumb_image')) {
            $thumb = $request->file('thumb_image');
            $data['thumb_image'] = $thumb->store('video/thumb', 'public');
        }

        if ($request->hasFile('video_url')) {
            $video = $request->file('video_url');
            $data['video_url'] = $video->store('video/videos', 'public');
        }

        if ($request->hasFile('stat1_icon')) {
            $icon1 = $request->file('stat1_icon');
            $data['stat1_icon'] = $icon1->store('video/icons', 'public');
        }

        if ($request->hasFile('stat2_icon')) {
            $icon2 = $request->file('stat2_icon');
            $data['stat2_icon'] = $icon2->store('video/icons', 'public');
        }

        VideoSection::create($data);

        return redirect()->route('video.index')->with('success', 'Video Section Created Successfully');
    }

    public function edit(VideoSection $video)
    {
        return view('backend.video.edit', compact('video'));
    }

    public function update(Request $request, VideoSection $video)
    {
        $data = $request->validate([
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20000',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'stat1_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stat1_number' => 'nullable|string|max:50',
            'stat1_text' => 'nullable|string|max:255',
            'stat2_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stat2_number' => 'nullable|string|max:50',
            'stat2_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'button_text' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('thumb_image')) {
            $thumb = $request->file('thumb_image');
            $data['thumb_image'] = $thumb->store('video/thumb', 'public');
        }

        if ($request->hasFile('video_url')) {
            $videoFile = $request->file('video_url');
            $data['video_url'] = $videoFile->store('video/videos', 'public');
        }

        if ($request->hasFile('stat1_icon')) {
            $icon1 = $request->file('stat1_icon');
            $data['stat1_icon'] = $icon1->store('video/icons', 'public');
        }

        if ($request->hasFile('stat2_icon')) {
            $icon2 = $request->file('stat2_icon');
            $data['stat2_icon'] = $icon2->store('video/icons', 'public');
        }

        $video->update($data);

        return redirect()->route('video.index')->with('success', 'Video Section Updated Successfully');
    }

    public function destroy(VideoSection $video)
    {
        $video->delete();
        return redirect()->route('video.index')->with('success', 'Video Section Deleted Successfully');
    }
}
