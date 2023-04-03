<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
// use Iluminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $message = array(
            'required.email' => 'required ',
            'required.password' => 'required ',
        );
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],$message);

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 'administrasi'])){
            return redirect()->to('/admin')->with('success','Selamat'.Auth::user()->name);
        }
        if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 'petugas'])){
            return redirect()->to('/admin/user')->with('success','Selamat'.Auth::user()->name);
        }

        if(Auth::attempt(['email' => $email, 'password' => $password,  'level' => 'masyarakat'])){
            return redirect()->to('/')->with('sueccess','Selamat'.Auth::user()->name);
        }
        return redirect()->back();
    }
}
