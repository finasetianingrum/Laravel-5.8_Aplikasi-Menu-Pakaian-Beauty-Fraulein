<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
    	'id_product',
    	'nama_product',
    	'harga',
    	'stok',
    	'id_brand',
    	'id_macam',
    	'bahan',
    	'foto'

    ];

    //Accessor
    public function getNamaProductAttribute($nama_product){
 	    return ucwords($nama_product);
 	}


    //Mutator
 	public function setNamaProductAttribute($nama_product){
 	    $this->attributes['nama_product'] = strtolower($nama_product);
 	}


    //Relasi Product - Brand
 	public function brand() {
    	return $this->belongsTo('App\Brand', 'id_brand');
    }

    //Relasi Product - Macam
    public function macam() {
        return $this->belongsTo('App\Macam', 'id_macam');
    }

}
