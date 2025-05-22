<?php
namespace App\Http\Controllers\Backend;
use App\Models\HospitalInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HospitalInfoController extends Controller
{
    public function index()
    {
        $infos = HospitalInfo::all();
        return view('backend.hospitalinfo.index', compact('infos'));
    }

    public function create()
    {
        return view('backend.hospitalinfo.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'required',
        'image' => 'nullable|image',
    ]);

    $hospitalInfo = new HospitalInfo($data);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newFilename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('hospitalinfos', $newFilename, 'public');
        $hospitalInfo->image = $newFilename; // Save only the filename
    }

    $hospitalInfo->save();

    return redirect()->route('hospitalinfo.index')->with('success', 'Created successfully!');
}


    public function edit($id)
    {
        $info = HospitalInfo::findOrFail($id);
        return view('backend.hospitalinfo.edit', compact('info'));
    }

    public function update(Request $request, $id)
{
    $hospitalInfo = HospitalInfo::findOrFail($id);

    $data = $request->validate([
        'title' => 'required|string',
        'description' => 'required',
        'image' => 'nullable|image',
    ]);

    $hospitalInfo->fill($data);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newFilename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('hospitalinfos', $newFilename, 'public');
        $hospitalInfo->image = $newFilename; // Save only the filename
    }

    $hospitalInfo->save();

    return redirect()->route('hospitalinfo.index')->with('success', 'Updated successfully!');
}


    public function destroy($id)
    {
        $info = HospitalInfo::findOrFail($id);
        $info->delete();
        return redirect()->route('hospitalinfo.index')->with('success', 'Deleted successfully!');
    }
}


?>