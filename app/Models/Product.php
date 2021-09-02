<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Productcategory::class);
    }

     public function inspectrequests(){
        return $this->hasMany(Inspectrequest::class, 'product_id');
    }


    public static function getProductID($slug){
    $getProductID = Product::select('id')->where('slug',$slug)->first();
        return $getProductID->id;
    }
}
