<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'city_id';
    protected $table = "citydetail";
    protected $guarded = [];
    protected $fillable = [
        'costofliving',
        'salary',
        'tax',
        'season',
        'temperature',
        'humidity',
        'aqi',
        'crimerate',
        'racism',
        'traffic',
        'hospital',
        'education',
        'internet',
        'recreational',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
