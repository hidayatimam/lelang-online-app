<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelang;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\User;
use App\Models\History_lelang;
use App\Models\HistoryLelang;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redirect;

class LelangController extends Controller
{
    public function index()
    {
        $data['sidebar'] = 'sidebar';
        $data['lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->where('status','dibuka')->get();
        return view('Admin.pages.lelang.index',$data);
    }
    public function lelang()
    {
        $data['sidebar'] = 'sidebar';
        $data['lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->get();
        return view('Admin.pages.lelang.lelang',$data);
    }
    public function tambah_barang_lelang(Request $request)
    {   
        $id_barang = $request->id_barang;
        $barang = Barang::where('id_barang',$id_barang)->first();

        $data = [
            'id_barang' => request()->id_barang,
            'tgl_dibuka' => now(),
            'tgl_ditutup' => now(),
            'status' => 'dibuka'
        ];

        Lelang::insert($data);
        if(Auth::user()->level == 'Administrasi'){
            return redirect()->to('admin/lelang')->with('success','Barang di tambahkan');
        }
        else if(Auth::user()->level == 'petugas'){
            return redirect()->to('admin/lelang')->with('success','Barang di tambahkan');
        }

        // $data['sidebar'] = 'sidebar';
        // $data['lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->get();
        // return view('Admin.pages.lelang.lelang',$data);
    }
    public function tambah_data_lelang( )
    {
        // untuk memvalidasi data
        request()->validate([               
            'nama_barang' => ['required', 'string', 'max:255'],
            'harga_awal' => 'required',
            'lama_lelang' => 'required',
            'deskripsi_barang' => ['required', 'string'],
        ]);
        // untuk memvalidasi data
        $file = request ()->image_barang;    //mengambil dari colum image_barang dan menambahkan

        $file_name = now().'_'.request()->nama_barang.'.png'; //mengubah file menjadi nama_barang ektensi png
        $path_upload = 'barang_lelang'; //

        $file->move($path_upload,$file_name); //lokasi upload

        $data_barang = [
            'image_barang' => $file_name,
            'nama_barang' => request()->nama_barang,
            'tgl' => now(),
            'harga_awal' => request()->harga_awal,
            'deskripsi_barang' => request()->deskripsi_barang,
        ];
        
        $id_barang = Barang::create($data_barang)->id;
        $lama_lelang = request()->lama_lelang;
        $data_lelang = [
            'id_barang' => $id_barang,
            'tgl_dibuka' => now(),
            'tgl_ditutup' => date('Y-m-d H:i:s',strtotime(now()."+ $lama_lelang days")),
            'id' => null,
            'id_petugas' => Auth::user()->id_petugas,
            'status' => 'dibuka',
        ];
        Lelang::insert($data_lelang,$data_barang);
        
        return redirect()->to('/admin/lelang')->with('success','Barang '.ucfirst(request()->nama_barang).' telah dibuka');
        
        //ucfirst untuk awalan kapital

    }
    public function history_lelang($id_lelang) //unutuk menangkap parameter
    {
        $data['sidebar'] = 'lelang_ditutup';
        $data['id_lelang'] = $id_lelang;
        $data['history'] = HistoryLelang::join('barangs','barangs.id_barang','=','history_lelangs.id_barang')->join('lelangs','lelangs.id_lelang','=','lelangs.id_lelang')->where('history_lelangs.id_lelang',$id_lelang)->orderBy('penawaran_harga','DESC')->get();
        return view('Admin.pages.lelang.history',$data);
    }

    public function confirm_status($id_lelang)
    {
        $status  = request()->status;
        
        if ($status == 'dibuka') {  //statment
             $status  =  'ditutup'; //
        }else {
            $status = 'dibuka';
        }
        $data = [
            'status' => $status
        ];
        Lelang::where('id_lelang', $id_lelang)->update($data);
        return redirect()->back();
    }

}
