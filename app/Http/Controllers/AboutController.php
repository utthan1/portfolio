<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutData;


class AboutController extends Controller
{
    public function index() {
        $about = AboutData::find(1);
        return view('admin.about', compact('about'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
            'political' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "about") : null;
        }

        AboutData::find(1)->update([
            'description' => $validatedData['description'],
            'political' => $validatedData['political'],
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Form data saved successfully!');
    }

    private function uploadFile($file, $destination)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/'. $destination), $fileName);
        return $destination . '/' . $fileName;
    }
}
