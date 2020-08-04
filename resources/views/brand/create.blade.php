@extends('template')

@section('main')
<div id = 'brand'>
	<h2>Tambah Brand</h2>

	{!! Form::open(['url' => 'brand']) !!}
		@include('brand.form', ['submitButtonText' => 'Simpan'])
	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
