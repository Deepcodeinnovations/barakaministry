<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public static function getClientID($slug){
    $getClientID = Client::select('id')->where('slug',$slug)->first();
        return $getClientID->id;
    }
}
