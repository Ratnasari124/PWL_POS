<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
        ]);
        $originalFileName = $request->file('berkas')->getClientOriginalName();
        $extfile = $request->file('berkas')->getClientOriginalExtension();
        $namaFile = 'web-' . time() . "." . $extfile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "/", $path);
        //echo "Variabel path berisi:$path <br>";

        $pathBaru = asset('gambar/' . $namaFile);
        return view('file-upload-result', compact('path', 'pathBaru', 'originalFileName'));

        //dump($request->berkas);
        //dump($request->file('file'));
        //return "pemrosesan file upload di sini";
        /*if ($request->hasFile('berkas')) {
            echo "path(): " . $request->berkas->path();
            echo "<br>";
            echo "extension(): " . $request->berkas->extension();
            echo "<br>";
            echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension();
            echo "<br>";
            echo "getMimeType(): " . $request->berkas->getMimeType();
            echo "<br>";
            echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
            echo "<br>";
            echo "getSize(): " . $request->berkas->getSize();
        } else {
            echo "Tidak ada berkas yang diupload";
        }*/
        //$path = $request->berkas->storeAs('public', $namaFile);
        //echo $request->berkas->getClientOriginalName() . "lolos validasi";
        //echo "Variabel path berisi:$path <br>";
        /*echo "proses upload berhasil, data disimpan di: $path";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";*/
    }
}
