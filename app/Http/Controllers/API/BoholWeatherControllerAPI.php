<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\BoholWeather;

class BoholWeatherControllerAPI extends Controller
{

    public function index(){

        $boholweather = BoholWeather::all();
        return response()->json(['$boholweather'=>$boholweather],200);
    }
}
