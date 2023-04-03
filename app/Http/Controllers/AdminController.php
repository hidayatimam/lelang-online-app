<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
 {
    $data['sidebar'] = 'sidebar';
    $data['lelang'] = Lelang::join('barangs','barangs.id_barang','=','lelangs.id_barang')->where('status','dibuka')->get();
    return view('Admin.index',$data);
 }
}
