<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goToDetail($cityname)
    {
        $city = CityModel::where('name', '=', $cityname)->get();
        $cities = CityModel::all();
        return view('detail', ['city' => $city[0]])->with('cities', $cities);
    }

    //blm kelar
}
