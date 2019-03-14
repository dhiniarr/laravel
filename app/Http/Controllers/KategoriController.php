<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriModel;


class KategoriController extends Controller
{
    public function index(){
    	$kategori = KategoriModel::all();
    	return view('kategori', compact('kategori'));
    	dd($kategori);
    }

    /*public function cari(Request $request){
    	$search = $request->get('q');
    	$cari = KategoriModel::where('nama_kategori', 'LIKE', '%'.$search.'%')->paginate(3);
    	return view('cari', compact('search', 'cari'));
    }*/

    public function cari(Request $request){
        $cari = $request->get('q');
        $result = KategoriModel::where('nama_kategori','LIKE','%'.$cari.'%')->paginate(5);
        return view('kategori',compact('cari'));
    }
}
