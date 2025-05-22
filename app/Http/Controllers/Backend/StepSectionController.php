<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\StepSection;
use Illuminate\Http\Request;

class StepSectionController extends Controller
{
    public function edit()
    {
        $section = StepSection::firstOrCreate([]);
        return view('backend.step.section_edit', compact('section'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
        ]);

        $section = StepSection::first();
        $section->update($data);

        return redirect()->route('step-section.edit')->with('success', 'Step Section Updated Successfully.');
    }
}
