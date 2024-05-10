<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;
    protected $fillable = ['event_post_id', 'path'];

    // Define the relationship to the event post
    public function eventPost()
    {
        return $this->belongsTo(EventPost::class);
    }
}
