<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class produkController extends Controller
{
	public function index()
	{
		$produk = DB::table('barangs')
				->join('kategori','barangs.id_kategori','=','kategori.id')
				->get();
		return view('produk/index',compact('produk'));
	}
	public function create ()
	{
		//
	}
	public function store()
	{
		DB::table('barangs')
		->insert([
		'nama' => 'Lampu',
		'id_kategori' => 1,
		'qty' => 14,
		'harga_beli' => 40000,
		'harga_jual' => 60000,
		]);

		echo "Data Berhasil Ditambah";
	}
	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}
	
	public function update ()
	{
		DB::table('barangs')->where('id',2)
		->update([
		'nama' => 'kursiii',
		'qty' => 20,
		'harga_beli' => 45000,
		'harga_jual' => 55000,
		]);
		echo "Data Berhasil Diperbaharui";
	}
	public function destroy($id)
	{
		//
	}

	public function delete()
	{
		DB::table('produks')->where('id',2)->delete();
		echo "Data Berhasil Dihapus";
	}

}
?>