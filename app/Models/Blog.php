<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function comments(){
    	return $this->hasMany(Blogcomment::class, 'blog_id');
    }

    public static function getBlogID($slug){
    $getBlogID = Blog::select('id')->where('slug',$slug)->first();
        return $getBlogID->id;
    }
}
