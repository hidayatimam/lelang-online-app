<?php

namespace App\Http\Controllers;

use App\Models\HistoryLelang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{
    public function index()
    {
        $data['lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->where('status','dibuka')->get();
        return view('frontend.index',$data);
    }
    public function detail_lelang($id_lelang)
    {  
        $data['detail_lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->where('id_lelang',$id_lelang)->first();
        $data['pelelang'] = HistoryLelang::join('barangs','barangs.id_barang','=','history_lelangs.id_barang')->join('lelangs','lelangs.id_lelang','=','history_lelangs.id_lelang')->join('users','users.id','=','history_lelangs.id')->where('history_lelangs.id_lelang',$id_lelang)->orderBy('history_lelangs.penawaran_harga','DESC')->get();
        return view('frontend.detail',$data);
    }
    public function ikut_lelang($id_lelang)
    {
        if(Auth::check() == NULL){
            return redirect('/login');
        }
        if(Auth::user()->level != 'masyarakat'){
            return redirect()->back()->with('danger','Kecuali masyarakat tidak bisa melakukan penawaran');
        }
        $lelang = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->first();
        if(request()->harga_akhir <= $lelang->harga_awal || request()->harga_akhir <= $lelang->harga_akhir){
            return redirect()->back()->with('delete', 'Masukkan Harga Lebih Tinggi');
        }
        Lelang::where('id_lelang',request()->id_lelang)->update([
            'id' => Auth::user()->id,
            'harga_akhir' => request()->harga_akhir,
        ]);
        HistoryLelang::insert([
            'id_lelang' => $id_lelang,
            'id_barang' => $lelang->id_barang,
            'id' => Auth::user()->id,
            'penawaran_harga' => request()->harga_akhir
        ]);
        return redirect()->back()->with('success','Terimaksih telah mengikuti lihat peserta lainya di bawah');
    }

}

