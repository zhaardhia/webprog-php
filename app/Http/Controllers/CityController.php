<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    //

    public function admin_city()
    {
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        $cities = CityModel::all();
        if ($result) {
            return view('admin.admin-city', ['cities' => $cities]);
        } else
            return redirect('/');
    }

    public function index()
    {
        $cities = CityModel::all();
        return view('index', ['cities' => $cities]);
    }
}
