<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDetail extends Model
{
    use HasFactory;

    protected $table = "citydetail";
    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
