<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BoholWeather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class BoholWeatherControllerAPI extends Controller {
    public $successStatus = 200;

    public function getAllBoholWeathers(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $BoholWeather = BoholWeather::all();

            return response()->json($BoholWeather, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  
    
    public function getBoholWeather(Request $request) {
        $id = $request['bwid']; // pid = BoholWeather id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $BoholWeather = BoholWeather::where('id', $id)->first();

            if ($BoholWeather != null) {
                return response()->json($BoholWeather, $this->successStatus);
            } else {
                return response()->json(['response' => 'BoholWeather not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchBoholWeather(Request $request) {
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $BoholWeather = BoholWeather::where('Town', 'LIKE', '%' . $params . '%')
                ->orWhere('temperature', 'LIKE', '%' . $params . '%')
                ->get();
            // SELECT * FROM BoholWeather WHERE description LIKE '%params%' OR title LIKE '%params%'
            if ($BoholWeather != null) {
                return response()->json($BoholWeather, $this->successStatus);
            } else {
                return response()->json(['response' => 'BoholWeather not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }
}