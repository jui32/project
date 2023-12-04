<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function cat(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    
}
