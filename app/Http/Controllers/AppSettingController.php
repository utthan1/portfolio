<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppSettingController extends Controller
{
    public function index() {
        $app = App::find(1);
        return view('admin.app-setting', compact('app'));
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'app-name' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta-tags' => 'required|string',
            'meta-description' => 'required|string',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "app_file") : null;
        }

        App::find(1)->update([
            'app_name' => $validatedData['app-name'],
            'logo' => $imagePath,
            'meta_tags' => $validatedData['meta-tags'],
            'meta_description' => $validatedData['meta-description'],
        ]);

        return redirect()->back()->with('success', 'App details saved successfully!');
    }

    private function uploadFile($file, $destination)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/'. $destination), $fileName);
        return $destination . '/' . $fileName;
    }

}
