<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Car extends Model
{
    public  function brand(){
        return  $this->belongsTo('App\Brand');
    }
    protected $fillable = ['registration','year_of_manufacture','color','brand_id'];
    use SoftDeletes;
}
