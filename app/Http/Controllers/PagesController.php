<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $cities = CityModel::all();
        return view('index', ['cities' => $cities]);
    }

    public function relogreat()
    {
        $cities = CityModel::all();
        return view('relogreat', ['cities' => $cities]);
    }

    public function checkout()
    {
        $this->middleware('auth');
        $cities = CityModel::all();
        return view('checkout', ['cities' => $cities]);
    }
}
