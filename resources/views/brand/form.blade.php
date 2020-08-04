@if (isset($brand))
    {!! Form::hidden('id', $brand->id) !!}
@endif

<!-- Nama -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_brand') ? 
        'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_brand', 'Nama Brand :', ['class' => 'control-label']) !!}
    {!! Form::text('nama_brand', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_brand'))
        <span class="help-block">{{ $errors->first('nama_brand') }}</span>
    @endif
</div>

<!-- Submit Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>