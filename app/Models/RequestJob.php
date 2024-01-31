<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestJob extends Model
{
    use HasFactory;
    public $table = "job_requests";
    protected $fillable = [
        "name","email","phone","image","file","job_id","country_id","city_id"
    ];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
