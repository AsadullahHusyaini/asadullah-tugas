@extends('Anggota.layout')

@section('title')
Ubah Data Anggota
@endsection

@section('conten')

<div class="col-sm-4">
	<form method="POST" action="{{url('anggota'/.$angg->id)}}">
		{{ csrf_field()}}
		<input type="hiden" name="_methot" value="PUT">
<div class="form-group">
	<label> Nim</label>
	<input type="text" name="nim" value="{{ $anggota->nama }}" class="form-control">
</div>
<div class="form-group">
	<label> Nama Anggota</label>
	<input type="text" name="nama" value="{{ $anggota->nama }}" class="form-control">
</div>
<div class="form-group">
	<label> Alamat</label>
	<textarea name="alamat" class="form-control">{{ $anggota->alamat }}</textarea>
</div>

<div class="form-group">
	<label> Angkatan </label>
	<input type="number" name="angkatan" value="{{ $anggota->angkatan }}" class="form-control">
</div>
<button type="submit" class="btn btn-succses btn-block "> ubah Data</button>
</form>
</div>