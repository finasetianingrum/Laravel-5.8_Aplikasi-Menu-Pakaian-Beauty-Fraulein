@extends('template')

@section('main')
<div id = 'product'>
	<h2>Tambah Produk</h2>

	{!! Form::open(['url' => 'product', 'files' => true]) !!}
		@include('product.form', ['submitButtonText' => 'Simpan'])
	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
