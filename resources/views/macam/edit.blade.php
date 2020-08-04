@extends('template')


@section('main')
	<div id="macam">
		<h2>Edit Jenis Dress</h2>

		{!! Form::model($macam, ['method' => 'PATCH', 'action' => ['MacamController@update', $macam->id]]) !!}
			@include('macam.form', ['submitButtonText' => 'Update'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop