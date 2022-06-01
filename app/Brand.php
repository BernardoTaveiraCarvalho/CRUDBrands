<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use mysql_xdevapi\Exception;

class Brand extends Model
{
    public function cars(){
        return $this->hasMany('App\Car');
    }
    protected $fillable = ['name'];
    use SoftDeletes;

    protected static function booted()
    {
        static::deleting(function ($brand) {
            if ($brand->cars()->exists()) {
                    throw new \Exception('Related cars found');
            }
        });
    }
}
