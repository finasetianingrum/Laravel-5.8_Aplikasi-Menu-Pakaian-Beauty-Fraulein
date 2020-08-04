@extends('template')

@section('main')
	<div id="macam">
		<h2>Jenis Dress</h2>

		@include('_partial.flash_message')

		@if(count($macam_list) > 0)
		<table class="table table-striped bg-success">
			<thead>
				<tr>
					<th>No</th>
					<th>Jenis Dress</th>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tbody>
			<?php $i = 0; ?>
			<?php foreach($macam_list as $macam): ?>
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $macam->nama_macam }}</td>
				<td>{{ $macam->deskripsi }}</td>

						<td>
							<div class="box-button">
								{{ link_to('macam/' . $macam->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
							</div>
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['MacamController@destroy', $macam->id]]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		@else
		<p>Tidak ada data jenis dress</p>
		@endif
		
		<div class="tombol-nav">
		<a href="macam/create" class="btn btn-primary">
		Tambah Jenis Dress</a>
	</div>
</div>

@stop

@section('footer')
	@include('footer')
@stop