@if (isset($product))
	{!! Form::hidden('id', $product->id) !!}
@endif


<!-- ID Product -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('id_product') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('id_product', 'ID Produk :', ['class' => 'control-label']) !!}
	{!! Form::text('id_product', null, ['class' => 'form-control']) !!}
	@if ($errors->has('id_product'))
	<span class="help-block">
		{{ $errors->first('id_product') }}
	</span>
	@endif
</div>


<!-- Nama Produk -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('nama_product') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('nama_product', 'Nama Produk :', ['class' => 'control-label']) !!}
	{!! Form::text('nama_product', null, ['class' => 'form-control']) !!}
	@if ($errors->has('nama_product'))
	<span class="help-block">
		{{ $errors->first('nama_product') }}
	</span>
	@endif
</div>


<!-- Brand -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('id_brand') ?
		'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('id_brand', 'Brand :', ['class' => 'control-label']) !!}
	@if(count($list_brand) > 0)
	{!! Form::select('id_brand', $list_brand, null, ['class' => 'form-control', 'id' => 'id_brand',
	'placeholder' => 'Pilih Brand']) !!}
	@else
		<p>Tidak ada pilihan brand, buat terlebih dahulu</p>
	@endif
	@if ($errors->has('id_brand'))
	<span class="help-block">{{ $errors->first('id_brand') }}</span>
	@endif
	</div>


<!-- Macam/Tipe -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('id_macam') ?
		'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('id_macam', 'Jenis Dress :', ['class' => 'control-label']) !!}
	@if(count($list_macam) > 0)
	{!! Form::select('id_macam', $list_macam, null, ['class' => 'form-control', 'id' => 'id_macam',
	'placeholder' => 'Pilih Jenis Dress']) !!}
	@else
		<p>Tidak ada pilihan jenis dress, buat terlebih dahulu</p>
	@endif
	@if ($errors->has('id_macam'))
	<span class="help-block">{{ $errors->first('id_macam') }}</span>
	@endif
	</div>


<!-- Bahan -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('bahan') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('bahan', 'Bahan :', ['class' => 'control-label']) !!}
	{!! Form::text('bahan', null, ['class' => 'form-control']) !!}
	@if ($errors->has('bahan'))
	<span class="help-block">
		{{ $errors->first('bahan') }}
	</span>
	@endif
</div>


<!-- Harga -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('harga') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('harga', 'Harga :', ['class' => 'control-label']) !!}
	{!! Form::text('harga', null, ['class' => 'form-control']) !!}
	@if ($errors->has('harga'))
	<span class="help-block">
		{{ $errors->first('harga') }}
	</span>
	@endif
</div>


<!-- Stok -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('stok') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('stok', 'Stok :', ['class' => 'control-label']) !!}
	{!! Form::text('stok', null, ['class' => 'form-control']) !!}
	@if ($errors->has('stok'))
	<span class="help-block">
		{{ $errors->first('stok') }}
	</span>
	@endif
</div>


<!-- Foto -->
@if ($errors->any())
<div class="form-group {{ $errors->has('foto') ? 
	'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
    {!! Form::label('foto', 'Foto :') !!}
    {!! Form::file('foto') !!}
    @if ($errors->has('foto'))
        <span class="help-block">{{ $errors->first('foto') }}</span>
    @endif
</div>


<!-- Menampilkan Foto -->
@if (isset($product))
	@if (isset($product->foto))
		<img src="{{ asset('fotoupload/' .$product->foto) }}">		
	@else
		<img src="{{ asset('fotoupload/dummydress.png') }}">
	@endif
@endif

<br><br><br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
