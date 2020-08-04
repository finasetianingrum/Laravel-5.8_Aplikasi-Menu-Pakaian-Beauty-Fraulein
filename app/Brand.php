<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    protected $fillable = ['nama_brand'];

    public function product() {
    	return $this->hasMany('App\Product', 'id_brand');
    }
}
