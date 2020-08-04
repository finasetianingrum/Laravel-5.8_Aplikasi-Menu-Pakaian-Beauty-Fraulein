<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use App\Brand;
use App\Macam;
use Storage;
use Session;



class ProductController extends Controller
{

    //Index
    public function index() {
        $halaman = 'product';
        $product_list = Product::orderBy('id_product','asc')->Paginate('7');      
        $jumlah_product = Product::count();
        return view('product.index', compact('halaman', 'product_list', 'jumlah_product'));
    }


    //Show Detail
    public function show($id) {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }


    //Create
    public function create() {
        $list_brand = Brand::pluck('nama_brand', 'id');
        $list_macam = Macam::pluck('nama_macam', 'id');
        return view('product.create', compact('list_brand', 'list_macam'));
    }

    //Create
    public function store(Request $request) {
        $input =  $request->all();

        //Validator
        $validator = Validator::make($input, [
            'id_product'      => 'required|string|size:4|unique:product,id_product',
            'nama_product'    => 'required|string|max:50',
            'harga'           => 'required|string|max:10',
            'stok'            => 'required|numeric',
            'id_brand'        => 'required',
            'id_macam'        => 'required',
            'bahan'           => 'required|string|max:50',
            'foto'            => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ]);

        if ($validator->fails()) {
            return redirect('product/create')
            ->withInput()
            ->withErrors($validator);
        }

        // Upload Foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        //create data product
        $product = Product::create($input);

        return redirect('product');
    }


    //Edit
    public function edit($id) {
        $product = Product::findOrFail($id);
        $list_brand = Brand::pluck('nama_brand', 'id');
        $list_macam = Macam::pluck('nama_macam', 'id');
        return view('product.edit', compact('product', 'list_brand', 'list_macam'));
    }


    //Update
    public function update($id, Request $request) {
        $product = Product::findOrFail($id);
        $input = $request->all();

        //Validator
        $validator = Validator::make($input, [
            'id_product'    => 'required|string|size:4|unique:product,id_product,'.$request->input('id'),
            'nama_product'  => 'required|string|max:50',
            'harga'  => 'required|string|max:10',
            'stok'  => 'required|numeric',
            'id_brand'  => 'required',
            'id_macam'  => 'required',
            'bahan' => 'required|string|max:50',
            'foto'            => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ]);

        if ($validator->fails()) {
                return redirect('product/' .$id. '/edit')
                ->withInput()
                ->withErrors($validator);
            }

        //Update foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->updateFoto($id, $request);
        }


        //Update product
        $product->update($input);

        return redirect('product');
    }


    public function destroy($id) {
        $product = Product::findOrFail($id);

        // Hapus foto jika ada
        $this->hapusFoto($id);
        $product->delete();
        return redirect('product');
    }


    //Upload foto
    private function uploadFoto(Request $request) {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name = date('YmdHis'). ".$ext";
            $foto->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }


    // Update foto
    private function updateFoto($id, Request $request) {
        $product = Product::findOrFail($id);

        // jika user mengisi foto
        if ($request->hasFile('foto')) {

            //hapus foto lama jika ada foto baru
            $exist = Storage::disk('foto')->exists($product->foto);
            if (isset($product->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($product->foto);
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $ext  = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $foto->move('fotoupload', $foto_name);
                return $foto_name;
            }
        }
    }

    // Hapus foto jika ada
    private function hapusFoto($id) {
        $product = Product::findOrFail($id);
        $is_foto_exist = Storage::disk('foto')->exists($product->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete($product->foto);
        }
    }
}
