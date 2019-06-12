@extends('Anggota.layout')

@section('title')
Tambah Data Anggota
@endsection

@section('conten')
<div class="col-sm-4">
	<form method="POST" action="{{url('anggota')}}">
		{{ csrf_field()}}
<div class="form-group">
	<label> Nim</label>
	<input type="text" name="nim" value="{{ $anggota-->nama }}" class="form-control">
</div>
<div class="form-group">
	<label> Nama Anggota</label>
	<input type="text" name="nama" class="form-control">
</div>
<div class="form-group">
	<label> Alamat</label>
	<textarea name="alamat" class="form-control"></textarea>
</div>
<div class="form-group">
	<label> Anggkatan</label>
	<input type="text" name="anggkatan" class="form-control">
</div>
<button type="submit" class="btn btn-succses btn-block "> Tambah Data</button>
</form>
</div>