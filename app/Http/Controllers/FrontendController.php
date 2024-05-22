<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Journey;
use App\Models\AboutData;
use App\Models\BlogPost;
use App\Models\Stalwart;
use App\Models\Gallery;
use App\Models\ImageGallery;
use App\Models\Event;
use App\Models\ContactMessage;
use App\Models\LiveSetting;


class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::orderBy('slide_no', 'asc')->get();
        $journey = Journey::orderBy('year', 'asc')->get();
        $news = BlogPost::orderBy('date', 'desc')->latest()->take(2)->get();
        $about = AboutData::first();
        $stalwart = Stalwart::get();
        $videoGallery = Gallery::latest()->take(2)->get();
        $imageGallery = ImageGallery::latest()->take(2)->get();
        $events = Event::latest()->take(2)->get();
        $live = LiveSetting::find(1);
        return view('welcome',['banner' => $banner,'about' => $about,  'journey' => $journey, 'news' => $news , 'stalwart' => $stalwart, 'videoGallery' => $videoGallery, 'imageGallery' => $imageGallery , 'events' => $events, 'live' => $live]);
    }

    public function about_index(){
        $about = AboutData::find(1);
        $journey = Journey::orderBy('year', 'asc')->get();
        // dd($about);
        return view('frontend.about',['about' => $about ,'journey' => $journey]);
    }

    public function news_index(){
        $news = BlogPost::orderBy('date', 'desc')->get();
        return view('frontend.news', ['news' => $news]);
    }

    public function news_details($id , $title){
        $blogpost= BlogPost::find( $id );
        return view('frontend.newsdetails', ['blogpost'=> $blogpost]);
    }

    public function gallery_index() {
        $gallery = ImageGallery::get();
        return view('frontend.gallery',['gallery' => $gallery]);
    }

    public function image_gallery_details($id , $title){
        $image_gallery = ImageGallery::find($id);
        return view('frontend.image_gallerydetails', ['image_gallery' => $image_gallery]);
    }

    public function event_details($id , $title){
        $event = Event::find($id);
        return view('frontend.event_details',['event' => $event]);
    }

    

    public function video_gallery_index() {
        $video_gallery = Gallery::get();
        return view('frontend.videogallery', ['video_gallery' => $video_gallery]);
    }

    public function video_gallery_detail($id , $title) {
        $video_gallery = Gallery::find($id);
        return view('frontend.video_gallerydetails', ['video_gallery' => $video_gallery]);
    }

    public function store_contact_message(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'enquiry_type' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $contactMessage = new ContactMessage;
        $contactMessage->name = $validatedData['name'];
        $contactMessage->email = $validatedData['email'];
        $contactMessage->mobile = $validatedData['mobile'];
        $contactMessage->enquiry_type = $validatedData['enquiry_type'];
        $contactMessage->message = $validatedData['message'];

        $contactMessage->save();
        $request->session()->flash('success', 'Your message has been submitted successfully.');
        return redirect()->back();
    }
}
