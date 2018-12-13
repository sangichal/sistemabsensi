<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    function isiJurnal(Request $request)
    {
        $kegiatan = new Kegiatan();
        $kegiatan->jurnal = $request['jurnal'];
        $request->guru()->kegiatan()->save($kegiatan);
        return redirect()->route('homeUsers');
    }    
}

