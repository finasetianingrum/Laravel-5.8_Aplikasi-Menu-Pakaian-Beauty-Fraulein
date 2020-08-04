@extends('template')

@section('main')
<div id='product'>
	<h2>Detail Produk</h2>

		<table class="table table-striped bg-success">
			<tr>
				<th>ID Produk</th>
				<td>{{ $product->id_product }}</td>
			</tr>

			<tr>
				<th>Nama</th>
				<td>{{ $product->nama_product }}</td>
			</tr>

			<tr>
				<th>Brand</th>
				<td>{{ $product->brand->nama_brand }}</td>
			</tr>

			<tr>
				<th>Jenis Dress</th>
				<td>{{ $product->macam->nama_macam }}</td>
			</tr>

			<tr>
				<th>Bahan</th>
				<td>{{ $product->bahan }}</td>
			</tr>

			<tr>
				<th>Harga</th>
				<td>{{ $product->harga }}</td>
			</tr>

			<tr>
				<th>Stok</th>
				<td>{{ $product->stok }}</td>
			</tr>

			<tr>
				<th>Foto</th>
				<td>
					@if (isset($product->foto))
					<img src="{{ asset('fotoupload/' .$product->foto) }}">
					@else
					<img src="{{ asset('fotoupload/dummydress.png') }}">
					@endif
				</td>
			</tr>
		</table>
	</div>
@stop

@section('footer')
	@include('footer')
@stop