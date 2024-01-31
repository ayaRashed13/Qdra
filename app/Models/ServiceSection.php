<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
    use HasFactory;
    public $table = "service_sections";
    protected $fillable =
    ["title","service_id"];

    public function service(){
        return $this->belongsTo(Service::class ,"service_id");
    }
    public function items(){
        return $this->hasMany(SectionItem::class,"service_section_id");
    }
}

