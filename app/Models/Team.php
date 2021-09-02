<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public static function getTeamID($slug){
    $getTeamID = Team::select('id')->where('slug',$slug)->first();
        return $getTeamID->id;
    }
}
