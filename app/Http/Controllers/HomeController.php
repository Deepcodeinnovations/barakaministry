<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Traits\Filestorage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Auth;
use Carbon\Carbon;
//my models
use App\Models\Blog;
use App\Models\Blogcomment;
use App\Models\Service;
use App\Models\Servicebreak;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Team;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Project;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Inspectrequest;


use App\Notifications\Inspect;
class HomeController extends Controller
{
  

    public function gethomepage()
    {
        return view('welcome');
    }

    public function about(){
    	return view('frontend.global.about');
    }

    public function focus(){
      return view('frontend.global.focus');
    }

      public function donate(){
      return view('frontend.global.donate');
    }

      public function sponsor(){
      return view('frontend.global.sponsor');
    }

      public function volunteer(){
      return view('frontend.global.volunteer');
    }

      public function visitus(){
      return view('frontend.global.visitus');
    }

      public function statementoffaith(){
      return view('frontend.global.statementoffaith');
    }

    public function contact(){
    	return view('frontend.global.contact');
    }

    public function team(){
    	return view('frontend.global.team');
    }



    public function clients(){
    	return view('frontend.global.clients');
    }

    

    //services
    public function services(){
     	$services = Service::where('status', 1)->get();
     	return view('frontend.services.services', compact(['services']));
     }

 
    public function servicedetails($slug){
       $id = Service::getServiceID($slug);
       $service = Service::find($id);

       return view('frontend.services.servicedetails', compact('service'));
    }

    //projects
    public function projects(){
     	$projects = Project::where('status', 1)->get();
     	return view('frontend.projects.projects', compact(['projects']));
     }

 
    public function projectdetails($slug){
       $id = Project::getProjectID($slug);
       $project = Project::find($id);

       return view('frontend.projects.projectdetails', compact('project'));
    }

    //BLOGS
    public function blogs(){
     	$blogs = Blog::where('status', 1)->get();
     	return view('frontend.blogs.blogs', compact(['blogs']));
     }

 
    public function blogdetails($slug){
       $id = Blog::getBlogID($slug);
       $blog = Blog::find($id);

       return view('frontend.blogs.blogdetails', compact('blog'));
    }

    //projects
    public function properties(){
     	$products = Product::where('status', 1)->paginate(8);
     	return view('frontend.products.products', compact(['products']));
     }

 
    public function propertydetails($slug){
       $id = Product::getProductID($slug);
       $product = Product::find($id);

       return view('frontend.products.productdetails', compact('product'));
    }

    public function catproperties($id){
       $cat = Productcategory::find($id);
       $products = Product::where('productcategory_id', $cat->id)->orderBy('created_at' , 'DESC')->paginate(8);
       return view('frontend.products.productcat', compact(['cat','products']));
    }

   public function storeproductorder(Request $request){
      $validator = Validator::make($request->all(), [
           'name' => ['required'],
           'email' => ['required'],
           'phone' => ['required'],
           'address' => ['required'],
           'product_id' => ['required'],
       ]);
       if($validator->fails()){
           return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $insp = new Inspectrequest;
        $insp->name = $request->name;
        $insp->phone = $request->phone;
        $insp->email = $request->email;
        $insp->address = $request->address;
        $insp->msg = $request->msg;
        $insp->product_id = $request->product_id; 
        $insp->save();

       if($insp->save()){
           $users = User::where('role', 'admin')->get();
           foreach($users as $user){
            \Notification::send($user, new Inspect($insp));
           }
          
         return redirect()->back()->with('success', 'Request Sent Successfully');
       }
      else{
         return redirect()->back()->withInput();
      }
    }
}








