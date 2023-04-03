<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //mengfungsikan hash pada password 
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function index()
    {   

        $data['sidebar'] = 'user'; 
        $user = User::orderBy('id','asc'); //asc untuk mengurutkan  dari bawah ke atas //order by untuk memilih kolom 
        $filter_level = request()->filter_level;
        if ($filter_level != NULL && $filter_level != 'all') {
            $user = $user->where('level',$filter_level);
        }
        $data['user'] = $user->get(); //menampilkan data sesuai level 
        return view('Admin.pages.user.index',$data);
    }
    public function user_petugas()
    {
            $data['sidebar'] = 'user';
            $data['user'] =  User::whereNot('level','masyarakat')->get();
            return view('Admin.pages.user_admin.index',$data);
    }
    public function tambah_user_petugas()
    {
        $data['sidebar'] = 'sidebar';
        return view('Admin.pages.user_admin.tambah',$data);
    }
    public function tambah_data()
    {

        //  untuk mengkustom require
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'level' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string' ,'min:8', 'confirmed']
        ]);

        $data = [
            'name' => request()->name,
            'id_petugas' => mt_rand(1000000000,9999999999),  //untuk mengacak nomer id
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'level' => request()->level,
        ];

        User::insert($data); //query database menambah data 
        return redirect()->to('/admin/user_petugas')->with('success', "User ".request()->level." telah di buat");

    }   
    

}
