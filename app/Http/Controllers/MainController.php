<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journey;
use App\Models\BlogPost;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\GalleryImage;
use App\Models\ImageGallery;
use App\Models\Stalwart;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function banner_index() {
        $banner = Banner::orderBy('slide_no', 'asc')->get();
        return View('admin.banner',['banner' => $banner]);
    }

    public function banner_create(Request $request)
    {
        
        $validatedData = $request->validate([
            'slide_no' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
   
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "banners") : null;
            $validatedData['image'] = $imagePath;
        }    

        Banner::create($validatedData);
        return redirect()->back()->with('success', 'Banner added successfully');
    }

    public function banner_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:banners,id',
            'slide_no' => 'required',
        ]);
        $banner = Banner::findOrFail($validatedData['id']);
        $banner->slide_no = $validatedData['slide_no'];
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "banners") : null;
            if ($banner->image) {
                $imagePathDelete = public_path('storage/' . $banner->image);
                if (File::exists($imagePathDelete)) {
                    File::delete($imagePathDelete);
                }
            }
            $banner->image = $imagePath;
        }

        $banner->save();
        return redirect()->back()->with('success', 'Banner updated successfully');
    }

    public function banner_delete($id){
        $banner = Banner::findOrFail($id);
        if ($banner->image) {
            $imagePath = public_path('storage/' . $banner->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $banner->delete();
        return redirect()->back()->with('success', 'Banner deleted successfully');
    }

    public function journey_index() {
        $journeyData = Journey::get();
        return View('admin.journey-setting',['journeyData' => $journeyData]);
    }

    public function journey_create(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required|integer',
            'journey_title' => 'required|string',
            'journey_desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "journey") : null;
            $validatedData['image'] = $imagePath;
        }

        Journey::create($validatedData);

        return redirect()->back()->with('success', 'Journey created successfully!');
    }
    
    public function journey_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:journeys,id',
            'year' => 'required|integer',
            'journey_title' => 'required|string',
            'journey_desc' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $journey = Journey::findOrFail($validatedData['id']);
        $journey->year = $validatedData['year'];
        $journey->journey_title = $validatedData['journey_title'];
        $journey->journey_desc = $validatedData['journey_desc'];

        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "journey") : null;
            if ($journey->image) {
                $imagePathDelete = public_path('storage/' . $journey->image);
                if (File::exists($imagePathDelete)) {
                    File::delete($imagePathDelete);
                }
            }
            $journey->image = $imagePath;
        }

        $journey->save();
        return redirect()->back()->with('success', 'Journey created successfully!');
    }

    public function journey_delete($id){
            $journey = Journey::findOrFail($id);
            
            if ($journey->image) {
                $imagePath = public_path('storage/' . $journey->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $journey->delete();
            return redirect()->back()->with('success', 'Journey deleted successfully');
    }


    public function stalwart_index() {
        $stalwart = Stalwart::get();
        return View('admin.stalwart-setting',['stalwart' => $stalwart]);
    }

    public function stalwart_create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'job_desc' => 'required|string',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048', // Max size in kilobytes (2MB)
                Rule::dimensions()->ratio(1)->width(153)->height(153),
            ],
        ], [
            'image.dimensions' => 'The :attribute must have a rendered size of 111x111 pixels and an aspect ratio of 1:1.',
        ]);
        

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "stalwart") : null;
            $validatedData['image'] = $imagePath;
        }

        Stalwart::create($validatedData);

        return redirect()->back()->with('success', 'Stalwart created successfully!');
    }
    
    public function stalwart_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:stalwarts,id',
            'title' => 'required|string',
            'job_desc' => 'required|string',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048', // Max size in kilobytes (2MB)
                Rule::dimensions()->ratio(1)->width(153)->height(153),
            ],
        ], [
            'image.dimensions' => 'The :attribute must have a rendered size of 111x111 pixels and an aspect ratio of 1:1.',
        ]);

        $stalwart = Stalwart::findOrFail($validatedData['id']);
        $stalwart->title = $validatedData['title'];
        $stalwart->job_desc = $validatedData['job_desc'];

        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "stalwart") : null;
            if ($stalwart->image) {
                $imagePathDelete = public_path('storage/' . $stalwart->image);
                if (File::exists($imagePathDelete)) {
                    File::delete($imagePathDelete);
                }
            }
            $stalwart->image = $imagePath;
        }

        $stalwart->save();
        return redirect()->back()->with('success', 'Journey created successfully!');
    }

    public function stalwart_delete($id){
            $stalwart = Stalwart::findOrFail($id);
            
            if ($stalwart->image) {
                $imagePath = public_path('storage/' . $stalwart->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $stalwart->delete();
            return redirect()->back()->with('success', 'Stalwart deleted successfully');
    }



    public function blog_index() {
        $blogData = BlogPost::get();
        return View('admin.blog-setting',['blogData' => $blogData]);
    }

    public function blog_create(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "blogs") : null;
            $validatedData['image'] = $imagePath;
        }

        BlogPost::create($validatedData);

        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    public function blog_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:blog_posts,id',
            'date' => 'required',
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $blog = BlogPost::findOrFail($validatedData['id']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "journey") : null;
            if ($blog->image) {
                $imagePathDelete = public_path('storage/' . $blog->image);
                if (File::exists($imagePathDelete)) {
                    File::delete($imagePathDelete);
                }
            }
            $validatedData['image'] = $imagePath;
        }
        $blog->update($validatedData);
        return redirect()->back()->with('success', 'Blog updated successfully');
    }

    public function blog_delete($id){
            $blog = BlogPost::findOrFail($id);
            
            if ($blog->image) {
                $imagePath = public_path('storage/' . $blog->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $blog->delete();
            return redirect()->back()->with('success', 'Blog deleted successfully');
    }

    public function gallery_index() {
        $gallery = Gallery::get();
        return View('admin.gallery-setting',['gallery' => $gallery]);
    }

    public function gallery_create(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048', // Max size in kilobytes (2MB)
                Rule::dimensions()->width(1920)->height(1080),
            ],
        ], [
            'image.dimensions' => 'The :attribute must have a rendered size of 1920x1080 pixels and an aspect ratio of 141:104.',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "video_gallery") : null;
            $validatedData['image'] = $imagePath;
        }

        Gallery::create($validatedData);

        return redirect()->back()->with('success', 'Gallery added successfully');
    }

    public function gallery_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:galleries,id',
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048', // Max size in kilobytes (2MB)
                Rule::dimensions()->width(1920)->height(1080),
            ],
        ], [
            'image.dimensions' => 'The :attribute must have a rendered size of 1920x1080 pixels and an aspect ratio of 141:104.',
        ]);
        $gallery = Gallery::findOrFail($validatedData['id']);
        $gallery->date = $validatedData['date'];
        $gallery->title = $validatedData['title'];
        $gallery->link = $validatedData['link'];


        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $imagePath = $request->file('image') ? $this->uploadFile($request->file('image'), "video_gallery") : null;
            if ($gallery->image) {
                $imagePathDelete = public_path('storage/' . $gallery->image);
                if (File::exists($imagePathDelete)) {
                    File::delete($imagePathDelete);
                }
            }
            $gallery->image = $imagePath;
        }

        $gallery->save();
        return redirect()->back()->with('success', 'Gallery updated successfully');
    }

    public function gallery_delete($id){
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image) {
            $imagePath = public_path('storage/' . $gallery->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery deleted successfully');
    }


    public function image_index() {
        $imageGallery = ImageGallery::get();
        return View('admin.image-gallery',['imageGallery' => $imageGallery]);
    }

    public function image_create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif' // Validate each image
        ]);
        
        $image_gallery = ImageGallery::create($validatedData);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $this->uploadFile($image, "image_gallery");
                $image_gallery->images()->create([
                    'image_path' => $imagePath
                ]);
            }
        }

        return redirect()->back()->with('success', 'Image Gallery post created successfully!');
    }

    public function image_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:image_galleries,id',
            'title' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image
        ]);
    
        $imageGallery = ImageGallery::findOrFail($validatedData['id']);

        $imageGallery->update($validatedData);
        
        if ($request->hasFile('images')) {
            foreach ($imageGallery->images as $image) {
                if ($image->image_path) {
                    $imagePath = public_path('storage/' . $image->image_path);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                        $image->delete();
                    }
                }
            }
            foreach ($request->file('images') as $image) {
                $imagePath = $this->uploadFile($image, "image_gallery");
                $imageGallery->images()->create([
                    'image_path' => $imagePath
                ]);
            }
        }
        return redirect()->back()->with('success', 'Gallery updated successfully');
    }

    public function image_delete($id){
        $gallery = ImageGallery::findOrFail($id);
        
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery deleted successfully');
    }






    public function event_index() {
        $events = Event::get();
        return View('admin.event-setting',['events' => $events]);
    }

    public function event_create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'link'=> 'required|string',
            'date' => 'required',
            'time' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
            'link_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image

        ]);

        if ($request->hasFile('link_image')) {
            $imagePath = $request->file('link_image') ? $this->uploadFile($request->file('link_image'), "events/video_gallery") : null;
            $validatedData['link_image'] = $imagePath;
        }
        
        $event = Event::create($validatedData);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $this->uploadFile($image, "events");
                $event->images()->create([
                    'path' => $imagePath
                ]);
            }
        }

        return redirect()->back()->with('success', 'Event post created successfully!');
    }

    public function event_update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:events,id',
            'title' => 'required|string',
            'location' => 'required|string',
            'link'=> 'required|string',
            'date' => 'required',
            'time' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image
        ]);
    
        $event = Event::findOrFail($validatedData['id']);

        if ($request->hasFile('link_image')) {
            $imagePath = $request->file('link_image') ? $this->uploadFile($request->file('link_image'), "events/video_gallery") : null;
            $validatedData['link_image'] = $imagePath;
        }

        $event->update($validatedData);
        
        if ($request->hasFile('images')) {
            foreach ($event->images as $image) {
                if ($image->path) {
                    $imagePath = public_path('storage/' . $image->path);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                        $image->delete();
                    }
                }
            }
            foreach ($request->file('images') as $image) {
                $imagePath = $this->uploadFile($image, "events");
                $event->images()->create([
                    'path' => $imagePath
                ]);
            }
        }
        return redirect()->back()->with('success', 'Event updated successfully');
    }

    public function event_delete($id){
            $event = Event::findOrFail($id);
            
            foreach ($event->images as $image) {
                if ($image->path) {
                    $imagePath = public_path('storage/' . $image->path);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                        $image->delete();
                    }
                }
            }
            $event->delete();
            return redirect()->back()->with('success', 'Event deleted successfully');
    }
    


    private function uploadFile($file, $destination)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/'. $destination), $fileName);
        return $destination . '/' . $fileName;
    }
}
