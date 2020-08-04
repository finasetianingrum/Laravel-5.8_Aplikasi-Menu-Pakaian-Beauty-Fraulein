@extends('template')

@section('main')
<div id ='brand'>
	<h2>Brand</h2>
	
	@include('_partial.flash_message')

	@if(count($brand_list) > 0)
	<table class="table table-striped bg-success">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Brand</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($brand_list as $brand): ?>
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $brand->nama_brand }}</td>

				<td>
					<div class="box-button">
						{{ link_to('brand/' . $brand->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
					</div>
					<div class="box-button">
						{!! Form::open(['method' => 'DELETE', 'action' => ['BrandController@destroy', $brand->id]]) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	@else
	<p>Tidak ada data brand</p>
	@endif

	<div class="tombol-nav">
		<a href="brand/create" class="btn btn-primary">
		Tambah Brand</a>
	</div>
</div>

@stop

@section('footer')
	@include('footer')
@stop
