@extends('layouts.body')

@section('isiNavbar')
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link"> <i class="fas fa-calendar-alt mr-2"></i> Jadwal Kegiatan </a>
</li>
<li class="nav-item active">
    <a href="{{ route('dataGuru') }}" class="nav-link"> <i class="fas fa-database mr-2"></i> Data Guru </a>
</li>
<li class="nav-item">
    <a href="" class="nav-link"> <i class="fas fa-sign-out-alt mr-2"></i> Keluar </a>
</li>
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <h6 class="text-right">Data Guru</h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <td> 55291212 </td>
                    <td><a href="{{url('detailGuru')}}"> Sinta </a> </td>
                    <td> 19/10/2011 </td>
                    <td> Brebes </td>
                    <td> SMK Karya Bhakti Brebes </td>
                    <td> deanheart09@gmail.com </td>
                </tbody>
            </table>

            <div class="float-right mt-3">
                <a href="{{ url('tambahGuru')}}">
                    <button type="button" class="btn btn-success bmd-btn-fab">
                        <i class="fas fa-plus"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Data Guru</h4>
                <p> Halaman ini merupakan halaman yang menampilkan semua data guru dimana. kau bisa menambahkan data
                    guru
                    dengan menekan ikon "+" dan untuk melihat detail informasi guru silahkan klik pada bagian nama guru</p>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>

</div>

@endsection

@extends('layouts.header')

@extends('layouts.navbar')