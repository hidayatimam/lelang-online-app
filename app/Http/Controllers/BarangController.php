<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data['sidebar'] = 'sidebar';
        $data['barang'] = Barang::all();
        return view('Admin.pages.lelang.barang',$data);
    }
    public function tambah_barang()
    {
        $data['sidebar'] = 'sidebar';
        
        return view('Admin.pages.lelang.tambah',$data);
    }
    public function tambah_data_barang()
    {
        request()->validate([
            'nama_barang' => ['required', 'max:255' , 'string'],
            'harga_awal' => ['required', 'numeric'],
            'deskripsi_barang' => ['required' , 'string']
        ]);
         // untuk memvalidasi data
         $file = request()->image_barang;    //mengambil dari colum image_barang dan menambahkan

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
        Barang::insert($data_barang);
        return redirect()->to('admin/lelang')->with('success','Data barang berhasil di tambahkan' );
    }
    public function delete_data($id_barang)
    {
        $barang  = Barang::where('id_barang',$id_barang)->first();
        $tmp = public_path('barang_lelang/'.$barang->image_barang);
        if (file_exists($tmp)) {
            unlink($tmp);
        }
        Barang::where('id_barang',$id_barang)->delete();
        return redirect()->back()->with('delete', 'Berhasil terhapus');
    }
}
