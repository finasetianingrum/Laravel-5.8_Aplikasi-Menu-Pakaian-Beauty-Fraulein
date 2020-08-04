@if (isset($user))
    {!! Form::hidden('id', $macam->id) !!}
@endif

<!-- Nama jenis/macam dress -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_macam') ? 
        'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_macam', 'Jenis Dress :', ['class' => 'control-label']) !!}
    {!! Form::text('nama_macam', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_macam'))
        <span class="help-block">{{ $errors->first('nama_macam') }}</span>
    @endif
</div>

<!-- Deskripsi -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('deskripsi') ? 
        'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('deskripsi', 'Deskripsi :', ['class' => 'control-label']) !!}
    {!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
    @if ($errors->has('deskripsi'))
        <span class="help-block">{{ $errors->first('deskripsi') }}</span>
    @endif
</div>

<!-- Submit Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>