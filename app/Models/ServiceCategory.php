<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    public $table = "service_categories";
    protected $fillable =
    [
        "title","desc","service_id"
    ];
    public function service()
    {
        return $this->belongsTo( Service::class , 'service_id');
    }
}
