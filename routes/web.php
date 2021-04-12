<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/', 'client.dashboard');
    Route::view('dashboard', 'client.dashboard');
    Route::view('sms', 'client.sms');
    Route::view('browser', 'client.browsers');
    Route::view('contact', 'client.contacts');
    Route::view('call_logs','client.contactlogs');
    Route::view('location', 'client.location');
    // Route::view('socials/{id}', 'client.socialmedia');
    Route::get('socials/{id}', function ($id) {
        if($id == "whatsapp" || $id =="facebook"){
            return view('client.socialmedia')->with('id',$id);
        }else{
            return abort(404);
        }
    });
});
