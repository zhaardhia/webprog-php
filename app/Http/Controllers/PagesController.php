<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function relogreat()
    {
        return view('relogreat');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
