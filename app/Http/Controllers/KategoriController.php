<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriModel;
use App\Http\Request;

class KategoriController extends Controller
{
    public function index(){
    	$kategori = KategoriModel::all();
    	return view('kategori', compact('kategori'));
    	dd($kategori);
    }

    public function search(Request $request){
    	$search = $request->get('q');
    	$cari = KategoriModel::where('nama_kategori', 'LIKE', '%'.$search.'%')->paginate(3);
    	return view('cari', compact('search', 'cari'));
    }
}
