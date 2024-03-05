<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan Eloquent Model
        /*$data = [
            'username' => 'customers-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4, // Pastikan nilai level_id yang Anda masukkan sesuai dengan yang ada di tabel m_level
        ];
        UserModel::insert($data); //tambahkan data ke tabel m_user*/

        $data = [
            'nama' => 'Pelanggan pertama',
        ];
        UserModel::where('username', 'customers-1')->update($data); //update data user
        //coba akses model UserModel
        $user = UserModel::all(); //ambil semua data dari atbel m_user
        return view('user', ['data' => $user]);
    }
}
