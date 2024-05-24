<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use App\Models\LiveSetting;
use App\Rules\AspectRatio;


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

    public function live_index() {
        $app = LiveSetting::find(1);
        return view('admin.live-setting', compact('app'));
    }

    public function live_store(Request $request)
    {
        
        $request->validate([
            'url' => 'required|string',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:2048',
                new AspectRatio(547, 312)
            ],
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "live") : null;
        }

        LiveSetting::find(1)->update([
            'url' => $request->url,
            'image' => $imagePath,
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
