<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Image extends Model
{
    use HasFactory;
    protected $table = 'Post_image';
    public $timestamps = false;
    protected $fillable = ['POST_ID', 'IMAGE_ID']; 
    public function image()
    {
        return $this->belongsTo(Image::class, 'IMAGE_ID');
    }
}
