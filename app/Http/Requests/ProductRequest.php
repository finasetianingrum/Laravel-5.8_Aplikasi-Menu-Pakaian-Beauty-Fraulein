<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Cek apakah CREATE atau UPDATE
        if ($this->method() == 'PATCH') {
            $id_product_rules    = 'required|string|size:4|unique:product,id_product,' . $this->get('id');
        } else {
            $id_product_rules    = 'required|string|size:4|unique:product,id_product';
            
        }

        return [
            'id_product'    => $id_product_rules,
            'nama_product'  => 'required|string|max:50',
            'harga'         => 'required|string|max:10',
            'stok'          => 'required|numeric',
            'id_brand'      => 'required',
            'id_jenis'      => 'required',
            'bahan'         => 'required|string|max:50',
            'foto'          => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ];
    }
}
