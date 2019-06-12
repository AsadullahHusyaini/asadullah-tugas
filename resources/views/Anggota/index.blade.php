
@extends('Anggota.layout')
@section('title')
data Anggota UKM
@endsection
@section('content')
<a href="{{ url('anggota/create') }}"> 
tambah data anggota 
</a>
<table class="table">
	<thead>
		<th>NO</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Angkatan</th>
		<th>aksi</th>
	</thead>
	<tbody>
	@foreach($data as $i => $value)
		<tr>
			<td>{{$i+1}}</td>
			<td>{{$value->nim}}</td>
			<td>{{$value->nama}}</td>
			<td>{{$value->alamat}}</td>
			<td>{{$value->angkatan}}</td>
			<td>
			 <a href="{{ url('anggota/'.$value->id.'/edit')}}" class="btn btn-warning-sm">Ubah</a>
                    <form action="{{ url('anggota/'.$value->id) }}" method="POST">
                        {{ csrf_field() }}
                          <button type="submit" class="btn btn_danger btn-sm" onclick="returun confirm('yakin ingin menghapus')">Hapus</button>
                    </form>
                </td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection