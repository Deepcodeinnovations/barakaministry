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
use App\Models\Gallery;
use App\Models\Inspectrequest;

class AdminController extends Controller
{
    use filestorage;

     public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    //get admin page
     public function getadminpage(){
      return view('admin.index');
     }

     //services

    public function services(){
     	$services = Service::all();
     	return view('admin.services.services', compact(['services']));
     }

    public function createservice(){
     	return view('admin.services.create');
     }

    public function servicedetails($slug){
       $id = Service::getServiceID($slug);
       $service = Service::find($id);

       return view('admin.services.servicedetails', compact('service'));
    }

    public function storeservice(Request $request){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'caption' => ['required'],
	        'image' => ['required'],
             'banner' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $service = new Service;
        $service->about = $request->about;
        $service->slogan = $request->slogan;
        $service->title = $request->title;
        $service->caption = $request->caption;
        $service->slug = str::slug($request->title).time();
        $image = $request->image;
        $banner = $request->banner;
        if($image){
        $fileName = 'deepcode_'.str::slug($service->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $service->image_url = $pathsave;
        }
        if($banner){
        $image = $request->banner;
        $fileName = 'deepcode_'.str::slug($service->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $service->banner_url = $pathsave;
        }
	    $service->save();

	    if($service->save()){
	    	return redirect()->route('admin.servicedetails', ['slug' => $service->slug ] );
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function updateservicepage($slug){
       $id = Service::getServiceID($slug);
       $service = Service::find($id);

       return view('admin.services.updateservice', compact('service'));
    }

    

    public function updateservice(Request $request, $slug){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'caption' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Service::getServiceID($slug);
       	$service = Service::find($id);
        $service->about = $request->about;
        $service->title = $request->title;
        $service->slogan = $request->slogan;
        $service->caption = $request->caption;
        if($service->title != $request->title){
          $service->slug = str::slug($request->title).time();  
        }
        
        $image = $request->image;

        $image = $request->image;
        $banner = $request->banner;
        if($image){
        $fileName = 'deepcode_'.str::slug($service->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $service->image_url = $pathsave;
        }
        if($banner){
        $image = $request->banner;
        $fileName = 'deepcode_'.str::slug($service->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $service->banner_url = $pathsave;
        }
	    $service->save();

	    if($service->save()){
	    	return redirect()->route('admin.servicedetails', ['slug' => $service->slug ] );
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function hideservice($slug){
       $id = Service::getServiceID($slug);
       $service = Service::find($id);
       $service->status = 0;
       $service->save();
       return redirect()->back();
    }


     public function storeserviceimage(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $serviceimage = new Gallery;
        $serviceimage->service_id = $request->service_id;
        $serviceimage->title = $request->title;
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($serviceimage->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $serviceimage->image_url = $pathsave;
        }
        $serviceimage->save();

        if($serviceimage->save()){
            return redirect()->back();
        }
        else{
            return redirect()->back()->withInput();
        }
    }


    public function deleteserviceimage($id){
        $serviceimage = Gallery::find($id);
        $serviceimage->delete();
        return redirect()->back();  
    }




     public function storeservicebreak(Request $request){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'image' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $servicebreak = new Servicebreak;
        $servicebreak->service_id = $request->service_id;
        $servicebreak->about = $request->about;
        $servicebreak->title = $request->title;
        $servicebreak->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($servicebreak->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $servicebreak->image_url = $pathsave;
        }
	    $servicebreak->save();

	    if($servicebreak->save()){
	    	return redirect()->back();
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }


    public function updateservicebreak(Request $request, $slug){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Servicebreak::getServicebreakID($slug);
       	$servicebreak = Servicebreak::find($id);
        $servicebreak->service_id = $request->service_id;
        $servicebreak->about = $request->about;
        $servicebreak->title = $request->title;
        $servicebreak->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($servicebreak->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/service/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $servicebreak->image_url = $pathsave;
        }
	    $servicebreak->save();

	    if($servicebreak->save()){
	    	return redirect()->back();
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function hideservicebreak($slug){
       $id = Service::getServiceID($slug);
       $service = Service::find($id);
       $service->status = 0;
       $service->save();
       return redirect()->back();
    }




    ///admin creat blogs

    public function blogs(){
     	$blogs = Blog::all();
     	return view('admin.blogs.blogs', compact(['blogs']));
     }

     public function blogdetails($slug){
       $id = Blog::getBlogID($slug);
       $blog = Blog::find($id);

       return view('admin.blogs.blogdetails', compact('blog'));
    }

     public function createblog(){
     	return view('admin.blogs.create');
     }

     public function storeblog(Request $request){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'caption' => ['required'],
	        'image' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $blog = new Blog;
        $blog->about = $request->about;
        $blog->title = $request->title;
        $blog->caption = $request->caption;
        $blog->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($blog->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/blogs/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $blog->image_url = $pathsave;
        }
	    $blog->save();

	    if($blog->save()){
	    	return redirect()->route('admin.blogdetails', ['slug' => $blog->slug ] );
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function updateblogpage($slug){
       $id = Blog::getBlogID($slug);
       $blog = Blog::find($id);

       return view('admin.blogs.updateblog', compact('blog'));
    }

    public function updateblog(Request $request, $slug){
     	$validator = Validator::make($request->all(), [
	        'title' => ['required'],
	        'caption' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Blog::getBlogID($slug);
       	$blog = Blog::find($id);
        $blog->about = $request->about;
        $blog->title = $request->title;
        $blog->caption = $request->caption;
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($blog->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/blogs/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $blog->image_url = $pathsave;
        }
        $blog->save();

	    if($blog->save()){
	    	return redirect()->route('admin.blogdetails', ['slug' => $blog->slug ] );
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function hideblog($slug){
       $id = Blog::getBlogID($slug);
       $blog = Blog::find($id);
       if($blog->status = 1){
        $blog->status = 0;
       }else{
        $blog->status = 1;
       }
       $blog->save();
       return redirect()->route('admin.blogs');
    }

    public function deleteblog($slug){
       $id = Blog::getBlogID($slug);
       $blog = Blog::find($id);
       $blog->delete();
       return redirect()->route('admin.blogs');
    }






      ///admin creat projects

    public function projects(){
        $projects = Project::all();
        return view('admin.projects.projects', compact(['projects']));
     }

     public function projectdetails($slug){
       $id = Project::getProjectID($slug);
       $project = Project::find($id);

       return view('admin.projects.projectdetails', compact('project'));
    }

     public function createproject(){
        return view('admin.projects.create');
     }

     public function storeproject(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
            'image' => ['required'],
            'about' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $project = new Project;
        $project->about = $request->about;
        $project->title = $request->title;
        $project->caption = $request->caption;
        $project->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($project->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/projects/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $project->image_url = $pathsave;
        }
        $project->save();

        if($project->save()){
            return redirect()->route('admin.projectdetails', ['slug' => $project->slug ] );
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    public function updateprojectpage($slug){
       $id = Project::getProjectID($slug);
       $project = Project::find($id);

       return view('admin.projects.updateproject', compact('project'));
    }

    public function updateproject(Request $request, $slug){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
            'about' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Project::getProjectID($slug);
        $project = Project::find($id);
        $project->about = $request->about;
        $project->title = $request->title;
        $project->caption = $request->caption;
        $project->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($project->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/projects/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $project->image_url = $pathsave;
        }
        $project->save();

        if($project->save()){
            return redirect()->route('admin.projectdetails', ['slug' => $project->slug ] );
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    public function hideproject($slug){
       $id = Project::getProjectID($slug);
       $project = Project::find($id);
       if($project->status = 1){
        $project->status = 0;
       }else{
        $project->status = 1;
       }
       return redirect()->route('admin.projects');
    }

    public function deleteproject($slug){
       $id = Project::getProjectID($slug);
       $project = Project::find($id);
       $project->delete();
       return redirect()->route('admin.projects');
    }




//products
    public function products(){
        $products = Product::all();
        return view('admin.products.products', compact(['products']));
     }

     public function categories(){
        $categories = Productcategory::all();
        return view('admin.products.categories', compact(['categories']));
     }

      public function storecategory(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 
        $cat = new Productcategory;
        $cat->title = $request->title;
        $cat->caption = $request->caption;
        $cat->slug = str::slug($request->title).time();
        $cat->save();

        return redirect()->back()->with('success','Data Uploaded');

     }


      public function updatecategory($id){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 
        $cat = Productcategory::find($id);
        $cat->title = $request->title;
        $cat->caption = $request->caption;
        $cat->save();
        return redirect()->back()->with('success','Data Uploaded');
     }

    public function productdetails($slug){
       $id = Product::getProductID($slug);
       $product = Product::find($id);

       return view('admin.products.productdetails', compact('product'));
    }

    public function createproduct(){
        return view('admin.products.create');
     }

    public function storeproduct(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
            'image' => ['required'],
            'about' => ['required'],
            'productcategory_id' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $product = new Product;
        $product->about = $request->about;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->productcategory_id = $request->productcategory_id;
        $product->caption = $request->caption;
        $product->slug = str::slug($request->title).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($product->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/products/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $product->image_url = $pathsave;
        }
        $product->save();

        if($product->save()){
            return redirect()->route('admin.productdetails', ['slug' => $product->slug ] );
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    public function updateproductpage($slug){
       $id = Product::getProductID($slug);
       $product = Product::find($id);

       return view('admin.products.updateproduct', compact('product'));
    }

    public function updateproduct(Request $request, $slug){
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'caption' => ['required'],
            'about' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Product::getProductID($slug);
        $product = Product::find($id);
        $product->about = $request->about;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->productcategory_id = $request->productcategory_id;
        $product->caption = $request->caption;
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($product->title).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/products/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $product->image_url = $pathsave;
        }
        $product->save();

        if($product->save()){
            return redirect()->route('admin.productdetails', ['slug' => $product->slug ] );
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    public function hideproduct($slug){
       $id = Product::getProductID($slug);
       $product = Product::find($id);
       if($product->status = 1){
        $product->status = 0;
       }else{
        $product->status = 1;
       }
       return redirect()->route('admin.products');
    }

    public function deleteproduct($slug){
       $id = Product::getProductID($slug);
       $product = Product::find($id);
       $product->delete();
       return redirect()->route('admin.products');
    }

    public function inspectrequests(){
        $inspectrequests = Inspectrequest::all();
        return view('admin.products.orders', compact(['inspectrequests']));
    }


    //team members
    public function team(){
     	$teams = Team::all();
     	return view('admin.team.team', compact(['teams']));
    }

    public function teamdetails($slug){
        $id = Team::getTeamID($slug);
        $team = Team::find($id);
        return view('admin.team.teamdetails', compact(['team']));
    }


    public function storeteam(Request $request){
     	$validator = Validator::make($request->all(), [
	        'name' => ['required'],
	        'position' => ['required'],
	        'image' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $team = new Team;
        $team->about = $request->about;
        $team->name = $request->name;
        $team->level = $request->level;
        $team->position = $request->position;
        $team->slug = str::slug($request->name).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($team->name).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/team/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $team->image_url = $pathsave;
        }
	    $team->save();

	    if($team->save()){
	    	return redirect()->back();
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }



    public function storeupdateteam(Request $request, $slug){
     	$validator = Validator::make($request->all(), [
	        'name' => ['required'],
	        'position' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Team::getTeamID($slug);
       	$team = Team::find($id);
        $team->about = $request->about;
        $team->name = $request->name;
        $team->level = $request->level;
        $team->position = $request->position;
        $team->slug = str::slug($request->name).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($team->name).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/team/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $team->image_url = $pathsave;
        }
	    $team->save();

	    if($team->save()){
	    	return redirect()->route('admin.teams');
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function hideteam($slug){
       $id = Team::getTeamID($slug);
        $team = Team::find($id);
        if($team->status == 0)
       $team->status = 1;
       else{
        $team->status = 0;
       }
       $team->save();
       return redirect()->back();
    }

    public function deleteteam($slug){
        $id = Team::getTeamID($slug);
        $team = Team::find($id);     
        $team->delete();
        return redirect()->back();
    }




    //clients
    public function clients(){
     	$clients = Client::all();
     	return view('admin.clients.clients', compact(['clients']));
    }

    public function clientdetails($slug){
        $id = Client::getClientID($slug);
        $client = Client::find($id);
        return view('admin.clients.clientdetails', compact(['client']));
    }

    public function storeclient(Request $request){
     	$validator = Validator::make($request->all(), [
	        'name' => ['required'],
	        'image' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $team = new Client;
        $team->about = $request->about;
        $team->name = $request->name;
        $team->slug = str::slug($request->name).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($team->name).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/team/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $team->image_url = $pathsave;
        }
	    $team->save();

	    if($team->save()){
	    	return redirect()->back();
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }



    public function storeupdateclient(Request $request, $slug){
     	$validator = Validator::make($request->all(), [
	        'name' => ['required'],
	        'about' => ['required'],
	    ]);
	    if($validator->fails()){
	        return redirect()->back()->withErrors($validator->errors())->withInput();
        } 

        $id = Client::getClientID($slug);
       	$client = Client::find($id);
        $client->about = $request->about;
        $client->name = $request->name;
        $client->slug = str::slug($request->name).time();
        $image = $request->image;

        if($image){
        $fileName = 'deepcode_'.str::slug($client->name).time() . '.'.$image->getClientOriginalExtension();
        $destinationPathweb = '/files/uploads/team/';
        $destinationPath = $destinationPathweb;
        $path = $this->storeimage($image, $destinationPath, $fileName);
        $pathsave = $destinationPathweb .$fileName;
        $client->image_url = $pathsave;
        }
	    $client->save();

	    if($client->save()){
	    	return redirect()->route('admin.clients');
	    }
    	else{
    		return redirect()->back()->withInput();
     	}
    }

    public function hideclient($slug){
      $id = Client::getClientID($slug);
        $client = Client::find($id);
        if($client->status == 0)
       $client->status = 1;
       else{
        $client->status = 0;
       }
       $client->save();
       return redirect()->back();
    }

    public function deleteclient($slug){
       $id = Client::getClientID($slug);
        $client = Client::find($id);     
        $client->delete();
        return redirect()->back();
    }


    public function contacts(){
    	$contacts = Contact::all();
    	return view('admin.others.webcontacts', compact('contacts'));
    }

    public function subscribers(){
        $subscribers = Subscriber::all();
        return view('admin.others.subscribers', compact('subscribers'));
    }

}
