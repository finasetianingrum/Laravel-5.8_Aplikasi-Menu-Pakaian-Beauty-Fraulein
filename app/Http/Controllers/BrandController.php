<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Validator;
use Session;

class BrandController extends Controller
{
	//Index
    protected function index() {
        $halaman = 'brand';
        $brand_list = Brand::all();
        return view('brand.index', compact('halaman', 'brand_list',));
    }

    //Create
    protected function create() {
    	return view('brand.create');
    }

    //Create
    protected function store(Request $request) {
        $data =  $request->all();

        //Validator
        $validasi = Validator::make($data, [
            'nama_brand'		=> 'required|max:30',
            
        ]);

        if ($validasi->fails()) {
            return redirect('brand/create')
            ->withInput()
            ->withErrors($validasi);
        }

        //Create data brand
        Brand::create($data);
        Session::flash('flash_message', 'Data brand berhasil disimpan');

        return redirect('brand');
    }


    public function show($id) {
        return redirect('brand');
    }

    //Edit brand
    protected function edit($id) {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }

    //Update brand
    public function update($id, Request $request) {
        $brand = Brand::findOrFail($id);
        $data = $request->all();

        $validasi = Validator::make($data, [
            'nama_brand'     => 'required|max:30',
            
        ]);

        if ($validasi->fails()) {
            return redirect("brand/$id/edit")
                    ->withErrors($validasi)
                    ->withInput();
        }

        $brand->update($data);
        Session::flash('flash_message', 'Data brand berhasil diupdate');

        return redirect('brand');
    }

    //Hapus brand
    protected function destroy($id) {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        Session::flash('flash_message', 'Data brand berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('brand');
    }    
}
