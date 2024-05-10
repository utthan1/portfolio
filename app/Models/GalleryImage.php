<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    protected $fillable = ['image_gallery_id ', 'image_path'];

    // Define the relationship to the event post
    public function eventPost()
    {
        return $this->belongsTo(EventPost::class);
    }
}
