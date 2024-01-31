<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{
    use HasFactory;
    public $table ="service_section_items";
    protected $fillable =
     [
        "title","desc","service_section_id"
    ];
    public function serviceSection(){
        return $this->belongsTo(ServiceSection::class , "service_section_id");
    }
   

}
