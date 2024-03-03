<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload_foto()
    {

    $dataalbum = [
        'dataalbum' => Album::with(['user'])->where('users_id', auth()->user()->id)->get()
    ];
    return view('pages.upload_foto', $dataalbum);
    }
    public function proses_upload(Request $request)
    {
        $filename = pathinfo($request->foto, PATHINFO_FILENAME);
        $extension = $request->foto->getClientOriginalExtension();
        $namafoto = 'foto' . time() . '.' . $extension;
        $request->foto->move('foto', $namafoto);

        $datasimpan = [
            'users_id' => auth()->user()->id,
            'album_id' => $request->album,
            'judul_foto' => $request->judul_foto,
            'deskripsi' => $request->deskripsi,
            'url' => $namafoto
        ];
        foto::create($datasimpan);
        return redirect('/beranda_user');
    }
}
