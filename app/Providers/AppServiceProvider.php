<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Blog;
use App\Models\Blogcomment;
use App\Models\Service;
use App\Models\Servicebreak;
use App\Models\Contact;
use App\Models\Client;
use App\Models\Team;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Productcategory;
use App\Models\Product;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

         View::composer('*', function($view)
         {
        $view->with('userblogs', Blog::where('status', 1)->get());
        $view->with('userclients', Client::where('status', 1)->get());
        $view->with('userservices', Service::where('status', 1)->get());
        $view->with('userblogs', Blog::where('status', 1)->get());
        $view->with('userteam', Team::where('status', 1)->get());
        $view->with('userclients', Client::where('status', 1)->get());
        $view->with('usergallery', Gallery::where('status', 1)->get());
        $view->with('userproductcats', Productcategory::where('status', 1)->get());
        $view->with('userproducts', Product::where('status', 1)->get());
         });



//for google backups
           \Storage::extend('google', function ($app, $config) {
        $client = new \Google_Client();
        $client->setClientId($config['clientId']);
        $client->setClientSecret($config['clientSecret']);
        $client->refreshToken($config['refreshToken']);
        $service = new \Google_Service_Drive($client);
        $adapter = new \Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter($service, $config['folderId']);

        return new \League\Flysystem\Filesystem($adapter);
    });
    }
}
