<?php

namespace App\Http\Controllers;

use App\Models\City as CityModel;
use App\Models\CityDetail as CDModel;
use App\Models\Images as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function admin_city()
    {
        $cities = CityModel::all();
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        if ($result) {
            return view('admin.admin-city', ['cities' => $cities]);
        } else
            return redirect('/');
    }

    public function create_city_view()
    {
        $cities = CityModel::all();
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        if ($result) {
            return view('admin.create-city', ['cities' => $cities]);
        } else
            return redirect('/');
    }

    public function store(Request $request)
    {
        //split request
        $city = new CityModel;
        $city->name = $request->name;
        $city->country = $request->country;
        $city->save();

        //add city_id to current request
        $city_id = CityModel::latest('id')->first()->id;
        $request->request->add(['city_id' => $city_id]);

        //remove attributes accordingly
        $detail_data = $request->except('_token', 'name', 'country', 'img1', 'img2', 'img3');
        $image_data = $request->except('_token', 'name', 'country', 'costofliving', 'salary', 'tax', 'seasons', 'temperature', 'humidity', 'aqi', 'crimerate', 'racism', 'traffic', 'hospital', 'education', 'internet', 'recreational');

        //create new detail
        CDModel::insert($detail_data);

        //create new image
        ImageModel::insert($image_data);

        return redirect('/admin-city');
    }

    public function update_city_view($city_id)
    {
        $cities = CityModel::all();
        $city = CityModel::findOrFail($city_id);
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        if ($result) {
            return view('admin.update-city', ['cities' => $cities])->with('city', $city);
        } else
            return redirect('/');
    }

    public function update(Request $request, $city_id)
    {
        //split request
        $city = CityModel::findOrFail($city_id);
        $city->name = $request->name;
        $city->country = $request->country;
        $city->save();

        //remove attributes accordingly
        $detail_data = $request->except('_token', 'name', 'country', 'img1', 'img2', 'img3');
        $image_data = $request->except('_token', 'name', 'country', 'costofliving', 'salary', 'tax', 'seasons', 'temperature', 'humidity', 'aqi', 'crimerate', 'racism', 'traffic', 'hospital', 'education', 'internet', 'recreational');

        //update detail and image
        $city->detail->update($detail_data);
        $city->images->update($image_data);

        return redirect('/admin-city');
    }

    public function destroy($city_id)
    {
        $city = CityModel::findOrFail($city_id);
        $city->detail->delete();
        $city->images->delete();
        $city->delete();

        return redirect('admin-city');
    }
}
