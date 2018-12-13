<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{

    function dataGuru()
    {
        return view('admin/dataGuru');
    }

    function dashboard()
    {
        return view('admin/home');
    }

    function tambahGuru()
    {
        return view('admin/tambahGuru');
    }

    function saveGuru(Request $request)
    {
        
        $request->validate([
            'NIK' => 'bail|required|min:12|unique:guru',
            'Email' => 'required|min:12|unique:guru'
        ]);

        $nik = $request['NIK'];
        $nama = $request['nama'];
        $password = bcrypt('password');
        $TptLahir = $request['TptLahir'];
        $TglLahir = $request['TglLahir'];
        $JnsKel = $request['JnsKel'];
        $Agama = $request['Agama'];
        $Alamat = $request['Alamat'];
        $Pendidikan = $request['Pendidikan'];
        $Email = $request['Email'];

        $user = new Guru();
        $user->NIK = $nik;
        $user->Nama = $nama;
        $user->password = $password;
        $user->Tpt_Lahir = $TptLahir;
        $user->Tgl_Lahir = $TglLahir;
        $user->JnsKel = $JnsKel;
        $user->Agama = $Agama;
        $user->Alamat = $Alamat;
        $user->Pendidikan = $Pendidikan;
        $user->Email = $Email;
    
        $user->save();

        return redirect()->back();
    } 
}
