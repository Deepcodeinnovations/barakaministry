<?php

//services
Route::prefix('/')->group(function () {
Route::get('/', [App\Http\Controllers\AdminController::class, 'getadminpage'])->name('admin.home');
Route::get('/manage/contacts', [App\Http\Controllers\AdminController::class, 'contacts'])->name('admin.contacts');
Route::get('/manage/subscribers', [App\Http\Controllers\AdminController::class, 'subscribers'])->name('admin.subscribers');
});

Route::prefix('/manage/services/')->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'services'])->name('admin.services');
	Route::get('/create', [App\Http\Controllers\AdminController::class, 'createservice'])->name('admin.createservice');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeservice'])->name('admin.storeservice');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'servicedetails'])->name('admin.servicedetails');
	Route::get('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateservicepage'])->name('admin.updateservice');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateservice'])->name('admin.storeupdateservice');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideservice'])->name('admin.hideservice');

	Route::post('/add-images', [App\Http\Controllers\AdminController::class, 'storeserviceimage'])->name('admin.storeserviceimage');
	Route::post('/images/{id}', [App\Http\Controllers\AdminController::class, 'deleteserviceimage'])->name('admin.deleteserviceimage');
});

Route::prefix('/manage/news&updates')->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'blogs'])->name('admin.blogs');
	Route::get('/create', [App\Http\Controllers\AdminController::class, 'createblog'])->name('admin.createblog');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeblog'])->name('admin.storeblog');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'blogdetails'])->name('admin.blogdetails');
	Route::get('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateblogpage'])->name('admin.updateblog');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateblog'])->name('admin.storeupdateblog');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideblog'])->name('admin.hideblog');
});

Route::prefix('/projects')->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'projects'])->name('admin.projects');
	Route::get('/create', [App\Http\Controllers\AdminController::class, 'createproject'])->name('admin.createproject');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeproject'])->name('admin.storeproject');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'projectdetails'])->name('admin.projectdetails');
	Route::get('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateprojectpage'])->name('admin.updateproject');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateproject'])->name('admin.storeupdateproject');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideproject'])->name('admin.hideproject');
});

Route::prefix('/properties/manage/')->group(function () {
	Route::get('/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories');
	Route::post('/categories/store', [App\Http\Controllers\AdminController::class, 'storecategory'])->name('admin.storecategory');
	Route::post('/categories/{id}', [App\Http\Controllers\AdminController::class, 'updatecategory'])->name('admin.updatecategory');
	Route::get('/requests', [App\Http\Controllers\AdminController::class, 'inspectrequests'])->name('admin.inspectrequests');
	Route::get('/', [App\Http\Controllers\AdminController::class, 'products'])->name('admin.products');
	Route::get('/create', [App\Http\Controllers\AdminController::class, 'createproduct'])->name('admin.createproduct');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeproduct'])->name('admin.storeproduct');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'productdetails'])->name('admin.productdetails');
	Route::get('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateproductpage'])->name('admin.updateproduct');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'updateproduct'])->name('admin.storeupdateproduct');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideproduct'])->name('admin.hideproduct');

});

Route::prefix('/manage/clients')->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'clients'])->name('admin.clients');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeclient'])->name('admin.storeclient');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'clientdetails'])->name('admin.clientdetails');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'storeupdateclient'])->name('admin.storeupdateclient');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideclient'])->name('admin.hideclient');
	Route::match(['get', 'post'],'/delete/{slug}', [App\Http\Controllers\AdminController::class, 'deleteclient'])->name('admin.deleteclient');
});

Route::prefix('/manage/teams')->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'team'])->name('admin.teams');
	Route::post('/store', [App\Http\Controllers\AdminController::class, 'storeteam'])->name('admin.storeteam');
	Route::get('/{slug}', [App\Http\Controllers\AdminController::class, 'teamdetails'])->name('admin.teamdetails');
	Route::post('/update/{slug}', [App\Http\Controllers\AdminController::class, 'storeupdateteam'])->name('admin.storeupdateteam');
	Route::match(['get', 'post'],'/hide/{slug}', [App\Http\Controllers\AdminController::class, 'hideteam'])->name('admin.hideteam');
	Route::match(['get', 'post'],'/delete/{slug}', [App\Http\Controllers\AdminController::class, 'deleteteam'])->name('admin.deleteteam');
});


