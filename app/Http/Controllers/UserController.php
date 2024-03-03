<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use App\Models\Followers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class UserController extends Controller
{
    //tampilan Index
    public function index ()
    {
        return view('pages.index');
    }

    //tampilan Login
    public function login ()
    {
        return view('pages.login');
    }
    public function proses_login( Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
                echo"<script>alert('Login Berhasil !!');window.location.href='/beranda_user'</script>";
            }else {
                echo"<script>alert('Login Gagallll !!');window.location.href='/login'</script>";
            }
        }
    //Register
    public function register() {
        return view('pages.register');
    }
    public function proses_register (Request $request) {
        $pesan = [
            'username.unique' =>'Username Yang anda Masukan Sudah Terdaftar',
            'password.required' => 'Password Tidak Boleh Kosong',
            'username.required' => 'Username Tidak Boleh Kosong',
            'tgl_lahir.required' => 'Tanggal Lahir Tidak Boleh Kosong',
            'password.min' => 'Password Minimal 6 Karakter'
        ];
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'tgl_lahir' => 'required',
        ],$pesan);
            $datasimpan = [
                'username' => $request->username,
                'password'=> Hash::make($request->password),
                'tgl_lahir' => $request->tgl_lahir
            ];
            User::create($datasimpan);

            return redirect('/login');
        }
    //beranda User
    public function beranda_user()
    {
        $data = [

            'datausers' => User::where('id',auth()->user()->id)->first()
          ];
        return view('pages.beranda_user',$data);
    }

    //Album
    // public Function album()
    // {

    //     $tampilUpload = Album::with('Foto')->where('users_id', auth()->user()->id)->get();
    //     $tampilAlbum = Foto::with('Album')->where('users_id', auth()->user()->id)->get();
    //     $profile = User::where('id', auth()->user()->id)->get();
    //     $data = [
    //         'dataprofile' => User::where('id',auth()->user()->id)->first(),

    //     ];
    //     return view('pages.profil_dan_album', $data, compact('tampilUpload', 'tampilAlbum', 'profile'));
    // }
    public function logout(Request $request)
    {
            // proses penghancuran session
            $request->session()->invalidate();
            // proses pembuatan session baru
            $request->session()->regenerate();
            // menampilkan halaman utama setelah logout
            echo"<script>alert('Log Out Berhasil !!');window.location.href='/'</script>";

    }
}
