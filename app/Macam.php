<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macam extends Model
{
    protected $table = 'macam';

    protected $fillable = [
    	'nama_macam',
    	'deskripsi'
    ];

    public function product() {
    	return $this->hasMany('App\Product', 'ic_macam');
    }

}
