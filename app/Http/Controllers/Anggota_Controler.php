<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
class Anggota_Controler extends Controller
{
  public function index()
  {

  	$var='asa';
  	$data=Anggota::all();
  	return view("anggota.index",compact('var','data'));
  }
  	public function create(){
		return view('anggota.tambah');
	}
	public function store(Request $anggota){
		Anggota::create($anggota->all());
		return redirect('anggota');
	}
	public function edit ($id){
		$angg = Anggota:: find($id);
		return view('anggota.ubah', compact('angg'));
	}
	public function update(Request $anggota, $id){
		$angg = $anggota->all();
		Anggota::find($id)->Update($angg);
		return redirect('anggota');

		}
		public function destroy($id){
			anggota::find($id)->delete();
			return redirect('anggota');
	}

}
