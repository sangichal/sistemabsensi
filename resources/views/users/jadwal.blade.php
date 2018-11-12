@extends('layouts.header')


@extends('layouts.body')

@section('isiNavbar')
<li class="nav-item">
        <a href=" {{ url("homeUsers") }} " class="nav-link">
            <i class="fas fa-pen-alt   mr-2 "></i> Isi Jurnal
        </a>
    </li>
    <li class="nav-item active">
        <a href=" {{ url("jadwalUsers") }} " class="nav-link">
            <i class="fas fa-calendar-alt mr-2"></i> Jadwal Kegiatan
        </a>
    </li>
<li class="nav-item">
    <a href="nav-link" class="nav-link">
        <i class="fas fa-sign-out-alt"></i> Keluar
    </a>
</li>
@endsection
@section('body')
<div class="container">
    <h6 class="text-right">Jadwal Kegiatan</h6>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th class="align-middle" rowspan="2">Jam</th>
                <th>Senin</th>
                <th colspan="3">Kelas</th>
            </tr>
            <tr class="text-center">
                <th>Waktu</th>
                <th>X RPL 1</th>
                <th>X RPL 2</th>
                <th>X RPL 3</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@extends('layouts.navbar')