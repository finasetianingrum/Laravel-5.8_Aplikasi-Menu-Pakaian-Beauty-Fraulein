@extends('template')


@section('main')
	<div id="macam">
		<h2>Tambah Jenis Dress</h2>

		{!! Form::open(['url' => 'macam']) !!}
		@include('macam.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop