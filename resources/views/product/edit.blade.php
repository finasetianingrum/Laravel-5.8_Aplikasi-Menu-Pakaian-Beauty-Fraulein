@extends('template')

@section('main')
<div id = 'product'>
	<h2>Edit Produk</h2>

	{!! Form::model($product, ['method' => 'PATCH', 'files' => true, 'action' => ['ProductController@update', $product->id]]) !!}
  	@include('product.form', ['submitButtonText' => 'Update'])
  	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
