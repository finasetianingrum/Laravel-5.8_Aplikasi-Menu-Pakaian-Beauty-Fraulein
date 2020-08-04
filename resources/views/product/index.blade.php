@extends('template')

@section('main')
<div id ='product'>
	<h2>Product</h2>

	@include('_partial.flash_message')
	
	@if (!empty($product_list))
	<table class="table table-striped bg-success">
		<thead>
			<tr>
				<th>ID Produk</th>
				<th>Nama</th>
				<th>Brand</th>
				<th>Jenis Dress</th>
				<th>Bahan</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($product_list as $product)
			<tr>
				<td>{{ $product->id_product }}</td>
				<td>{{ $product->nama_product }}</td>
				<td>{{ $product->brand->nama_brand }}</td>
				<td>{{ $product->macam->nama_macam }}</td>
				<td>{{ $product->bahan }}</td>
				<td>{{ $product->harga }}</td>
				<td>{{ $product->stok }}</td>

				<td>
					<div class="box-button">
						{{ link_to('product/' . $product->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
					</div>
					<div class="box-button">
						{{ link_to('product/' . $product->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
					</div>
					<div class="box-button">
						{!! Form::open(['method' => 'DELETE', 'action' => ['ProductController@destroy', $product->id]]) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>Tidak ada data produk</p>
	@endif

	<div class="table-nav">
	<div class="jumlah-data">
		<strong>Jumlah Produk : {{ $jumlah_product }}</strong>
	</div>
	<div class="paging">
		{{ $product_list->links() }}
	</div>

	</div>

	<div class="tombol-nav">
		<a href="{{ url('product/create') }}" class="btn btn-primary">
		Tambah Produk</a>
	</div>
</div>

@stop

@section('footer')
	@include('footer')
@stop
