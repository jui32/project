<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{   
    use HasFactory;
    protected $guarded=[];

    public function cat(){
        return $this->belongsTo(Category::class, 'categroy_id', 'id');
    }

    
}
