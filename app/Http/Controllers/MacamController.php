<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macam;
use Validator;
use Session;

class MacamController extends Controller
{
    protected function index() {
    	$macam_list = Macam::all();
    	return view('macam.index', compact('macam_list'));
    }

    protected function create() {
    	return view('macam.create');
    }

    public function store(Request $request) {
    	$data = $request->all();

    	$validasi = Validator::make($data, [
    		'nama_macam' => 'required|max:50|unique:macam,nama_macam',
    		'deskripsi' => 
    		'required|max:100'
    	]);

    	if ($validasi->fails()) {
    		return redirect('macam/create')
    		->withInput()
    		->withErrors($validasi);
    	}

    	Macam::create($data);
    	Session::flash('flash_message', 'Data jenis dress berhasil disimpan');

    	return redirect('macam');
    }

    public function show($id) {
    	return redirect('macam');
    }

    protected function edit($id) {
    	$macam = Macam::findOrfail($id);
    	return view('macam.edit', compact('macam'));
    }

    public function update($id, Request $request) {
    	$macam = Macam::findOrfail($id);
    	$data = $request->all();

    	$validasi = Validator::make($data, [
    		'nama_macam' => 'required|max:50',
    		'deskripsi' => 
    		'required|max:100'
    	]);

    	if ($validasi->fails()) {
    		return redirect('macam/create')
    		->withInput()
    		->withErrors($validasi);
    	}

    	$macam->update($data);
    	Session::flash('flash_message', 'Data jenis dress berhasil di update');

    	return redirect('macam');
    }

    protected function destroy($id) {
    	$macam = Macam::findOrfail($id);
    	$macam->delete();

    	Session::flash('flash_message', 'Data jenis dress berhasil di hapus');
    	Session::flash('penting', true);

    	return redirect('macam');

    }
}
