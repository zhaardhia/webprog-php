@extends('layouts.master')
@section('content')
<section>
    <div class="container">
        <h1 class="mt-3">Update city</h1>
        <div class="row mt-3">
            <div class="col-lg-8">
                <form action="/update/{{$city->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="{{$city->name}}" value="{{$city->name}}">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control" placeholder="{{$city->country}}" value="{{$city->country}}">
                    </div>
                    <h3 class="mt-2">Details</h3>
                    <div class="form-group">
                        <label for="costofliving">Cost of Living ($)</label>
                        <input type="text" name="costofliving" class="form-control" placeholder="{{$city->detail->costofliving}}" value="{{$city->detail->costofliving}}">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary ($)</label>
                        <input type="text" name="salary" class="form-control" placeholder="{{$city->detail->salary}}" value="{{$city->detail->salary}}">
                    </div>
                    <div class="form-group">
                        <label for="tax">Tax (%)</label>
                        <input type="text" name="tax" class="form-control" placeholder="{{$city->detail->tax}}" value="{{$city->detail->tax}}">
                    </div>
                    <div class="form-group">
                        <label for="seasons">Seasons</label>
                        <input type="text" name="seasons" class="form-control" placeholder="{{$city->detail->seasons}}" value="{{$city->detail->seasons}}">
                    </div>
                    <div class="form-group">
                        <label for="temperature">Temperature (Celsius)</label>
                        <input type="text" name="temperature" class="form-control" placeholder="{{$city->detail->temperature}}" value="{{$city->detail->temperature}}">
                    </div>
                    <div class="form-group">
                        <label for="humidity">Humidity</label>
                        <input type="text" name="humidity" class="form-control" placeholder="{{$city->detail->humidity}}"value="{{$city->detail->humidity}}">
                    </div>
                    <div class="form-group">
                        <label for="aqi">AQI (Air Quality Index)</label>
                        <input type="text" name="aqi" class="form-control" placeholder="{{$city->detail->aqi}}" value="{{$city->detail->aqi}}">
                    </div>

                    <div class="form-group">
                        <label for="crimerate">Crime Rate</label>
                        <input type="text" name="crimerate" class="form-control" placeholder="{{$city->detail->crimerate}}" value="{{$city->detail->crimerate}}"
                    </div>
                    <div class="form-group">
                        <label for="racism">Lack of Racism</label>
                        <input type="text" name="racism" class="form-control" placeholder="{{$city->detail->racism}}" value="{{$city->detail->racism}}">
                    </div>
                    <div class="form-group">
                        <label for="traffic">Traffic Safety</label>
                        <input type="text" name="traffic" class="form-control" placeholder="{{$city->detail->traffic}}" value="{{$city->detail->traffic}}">
                    </div>
                    <div class="form-group">
                        <label for="hospital">Hospital Quality</label>
                        <input type="text" name="hospital" class="form-control" placeholder="{{$city->detail->hospital}}" value="{{$city->detail->hospital}}">
                    </div>
                    <div class="form-group">
                        <label for="education">Quality of Education</label>
                        <input type="text" name="education" class="form-control" placeholder="{{$city->detail->education}}" value="{{$city->detail->education}}">
                    </div>
                    <div class="form-group">
                        <label for="internet">Average Internet Speed (mbps)</label>
                        <input type="text" name="internet" class="form-control" placeholder="{{$city->detail->internet}}" value="{{$city->detail->internet}}">
                    </div>
                    <div class="form-group">
                        <label for="recreational">Recreational Activities</label>
                        <input type="text" name="recreational" class="form-control" placeholder="{{$city->detail->recreational}}" value="{{$city->detail->recreational}}">
                    </div>
                    <h3 class="mt-2">Images</h3>
                    <div class="form-group">
                        <label for="img1">Image 1 (URL)</label>
                        <input type="text" name="img1" class="form-control" placeholder="{{$city->images->img1}}" value="{{$city->images->img1}}">
                    </div>
                    <div class="form-group">
                        <label for="img2">Image 2 (URL)</label>
                        <input type="text" name="img2" class="form-control" placeholder="{{$city->images->img2}}" value="{{$city->images->img2}}">
                    </div>
                    <div class="form-group">
                        <label for="img3">Image 3 (URL)</label>
                        <input type="text" name="img3" class="form-control" placeholder="{{$city->images->img3}}" value="{{$city->images->img3}}">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Update City</button>
                    </div>
                    <div class="form-group mt-2">
                            <a href="/admin-city">Back to city list</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
