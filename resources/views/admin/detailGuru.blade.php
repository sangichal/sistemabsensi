@extends('layouts.header')


@extends('layouts.body')
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <div class="row">
                <div class="col-md-2 d-flex align-items-center">
                    <img class="card-img-top" src="{{ asset('assets/users.png')}}" alt="">
                </div>
                <div class="col-md">
                    <a name="" id="" class="btn btn-primary float-right" href="#" role="button">
                        Cetak Jurnal
                    </a>
                    <div class="col-md mb-3">
                        552001212 / deanheart09@gmail.com
                    </div>
                    <div class="col-md mb-3">
                        <h3>Nursinta / S1</h3>
                    </div>
                    <div class="col-md mb-3">
                        Jl. Ir Juanda RT 04 / 03 Krandon Tegal
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Detail Guru</h4>
                <p></p>
                <p class="mb-0"> Halaman Ini Menampilkan data detail guru yang telah di pilih dimana admin dapat
                    melihat informasi tambahan dan mencetak data informasi absensi guru yang telah di cetak</p>
            </div>
        </div>
    </div>


    <br>
    <h6 class="text-right">Jurnal Kegiatan</h6>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Isi Jurnal</th>
        </thead>
        <tbody>
            <td>Senin, 19 Oktober 2018</td>
            <td>Pelatihan Matrik</td>
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.navbar')