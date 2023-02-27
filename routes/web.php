<?php


use App\Http\Controllers\Contacts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Controller format

//Route::get('/about', [\App\Http\Controllers\about::class, 'getAbout']);

// Main Routes

// if (App::environment('production')) {
//     URL::forceScheme('https');
// }

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/work', function () {
    return view('pages.work');
});

Route::get('/headphones', function () {
    return view('pages.works.headphones');
});

Route::get('/table', function () {
    return view('pages.works.glass');
});

Route::get('/contact', function () {
//    $alert = 'message';
//    return view('/pages.contact', compact('alert'));
    return view('/pages.contact');
});

// Storing Contact information

Route::post('/store', [Contacts::class,'getStore']) -> name('contact.store');

// Returning data after a successful storage session


