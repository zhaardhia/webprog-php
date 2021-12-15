<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "city";
    protected $guarded = [];
    protected $fillable = [
        'name',
        'country'
    ];

    public function detail()
    {
        return $this->hasOne(CityDetail::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function images()
    {
        return $this->hasOne(Images::class);
    }
}
