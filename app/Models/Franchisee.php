<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchisee extends Model
{
    use HasFactory;
    // protected $table = "franchisees";
    public function state(){
        return $this->hasOne(States::class,'id','state_id');
    }
    public function city(){
        return $this->hasOne(Cities::class,'id','city_id');
    }
}
