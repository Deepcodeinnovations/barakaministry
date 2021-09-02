<?php
Route::prefix('/')->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'gethomepage'])->name('web.home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('web.about');
Route::get('/our-focus', [App\Http\Controllers\HomeController::class, 'focus'])->name('web.focus');
Route::get('/sponsor-a-child', [App\Http\Controllers\HomeController::class, 'sponsor'])->name('web.sponsor');
Route::get('/donate', [App\Http\Controllers\HomeController::class, 'donate'])->name('web.donate');
Route::get('/volunteer', [App\Http\Controllers\HomeController::class, 'volunteer'])->name('web.volunteer');
Route::get('/visit-us', [App\Http\Controllers\HomeController::class, 'visitus'])->name('web.visitus');
Route::get('/statement-of-faith', [App\Http\Controllers\HomeController::class, 'statementoffaith'])->name('web.statementoffaith');
Route::get('/our-team', [App\Http\Controllers\HomeController::class, 'team'])->name('web.team');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('web.contact');
});

Route::prefix('/what-we-do/')->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'services'])->name('web.services');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'servicedetails'])->name('web.servicedetails');
});

Route::prefix('/projects')->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'projects'])->name('web.projects');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'projectdetails'])->name('web.projectdetails');
});

Route::prefix('/properties')->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'properties'])->name('web.properties');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'propertydetails'])->name('web.propertydetails');
Route::get('/by-category/{id}', [App\Http\Controllers\HomeController::class, 'catproperties'])->name('web.catproperties');
Route::post('/request-inspection', [App\Http\Controllers\HomeController::class, 'storeproductorder'])->name('web.storeproductorder');

});

Route::prefix('/news&updates/')->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'blogs'])->name('web.blogs');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'blogdetails'])->name('web.blogdetails');
});

