@extends('template')

@section('main')
<div id = 'brand'>
	<h2>Edit Brand</h2>

	{!! Form::model($brand, ['method' => 'PATCH', 'action' => ['BrandController@update', $brand->id]]) !!}
  	@include('brand.form', ['submitButtonText' => 'Update'])
  	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
