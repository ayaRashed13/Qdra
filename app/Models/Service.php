<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $table = "services";
    protected $fillable =
    [
        'title','desc','shortdesc','background_image','image','video','video_image'
    ];
}
