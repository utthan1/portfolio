<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title','link', 'link_image', 'location', 'date', 'time'];
    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}
