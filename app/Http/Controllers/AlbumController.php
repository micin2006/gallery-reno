<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Komentar;
use App\Models\Followers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    PUBLIC function prosestambah_album(Request $request)
    {
        $data = [
            'users_id' => auth()->user()->id,
            'judul_album' => $request->album
        ];
    Album::create($data);
    return redirect('/upload_foto');
    }
    PUBLIC function prosestambah_album1(Request $request)
    {
        $data = [
            'users_id' => auth()->user()->id,
            'judul_album' => $request->album
        ];
    Album::create($data);
    return redirect('/album');
    }
    public function dalemanalbum($id)
    {
        $album =album::with('foto')->orderby('id','DESC')->FindOrFail($id);
       return view('pages.daleman_album' , compact('album'));
    }
    public function album(){
        $tampilUpload = Foto::with('Album')->where('users_id', auth()->user()->id)->get();
        $tampilAlbum = Album::with('Foto')->where('users_id', auth()->user()->id)->get();
        $profile = User::where('id', auth()->user()->id)->first();
        $datafollowers = Followers::where('users_id', auth()->user()-> id)->count();
        return view('pages.profil_dan_album', compact('tampilUpload', 'tampilAlbum','profile', 'datafollowers'));
    }
    public function hapusfoto(Request $request, Foto $foto)
    {
        if($foto->users_id != auth()->user()->id) {
            return back();
        }
    
        try {
            DB::beginTransaction();
    
            Like::where('foto_id', $foto->id)->delete();
    
            Komentar::where('foto_id', $foto->id)->delete();
    
            $foto->delete();
    
            DB::commit();
    
            return redirect()->back()->with('success', 'Foto berhasil dihapus !!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menghapus foto !!');
        }
    }
    public function hapusfotodialbum(Request $request, Foto $foto)
    {
        if($foto->users_id != auth()->user()->id) {
            return back();
        }
    
        try {
            DB::beginTransaction();
    
            Like::where('foto_id', $foto->id)->delete();
    
            Komentar::where('foto_id', $foto->id)->delete();
    
            $foto->delete();
    
            DB::commit();
    
            return redirect()->back()->with('success', 'Foto berhasil dihapus !!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menghapus foto !!');
        }
    }
    
}


