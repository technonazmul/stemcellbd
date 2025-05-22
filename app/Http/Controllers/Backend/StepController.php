<?php

namespace App\Http\Controllers\Backend;

use App\Models\Step;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StepController extends Controller
{
    public function index()
{
    $steps = Step::all();
    return view('backend.step.index', compact('steps'));
}

public function create()
{
    return view('backend.step.create');
}

public function store(Request $request)
{
   $data = $request->except(['_token', '_method', 'image']);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('step', $data['image'], 'public');
    }

    Step::create($data);
    return redirect()->route('steps.index')->with('success', 'Step Created Successfully');
}

public function edit(Step $step)
{
    return view('backend.step.edit', compact('step'));
}

public function update(Request $request, Step $step)
{
   $data = $request->except(['_token', '_method', 'image']);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('step', $data['image'], 'public');
    }

    $step->update($data);
    return redirect()->route('steps.index')->with('success', 'Step Updated Successfully');
}

public function destroy(Step $step)
{
    $step->delete();
    return redirect()->route('steps.index')->with('success', 'Step Deleted Successfully');
}


}
