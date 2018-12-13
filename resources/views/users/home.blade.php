@extends('layouts.header')

@extends('layouts.body')

@section('isiNavbar')
<li class="nav-item active">
    <a href=" {{ url("homeUsers") }} " class="nav-link">
        <i class="fas fa-pen-alt mr-2    "></i> Isi Jurnal
    </a>
</li>
<li class="nav-item">
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
    <div class="card">
        <div class="card-body">
        <form action="{{ route('isiJurnal') }}" method="POST">
                <div class="form-group">
                    <label for="">Isi Jurnal</label>
                    <textarea class="form-control" name="jurnal" id="" rows="3"></textarea>
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                </div>
<button type="submit" name="" id="" class="btn btn-primary btn-block">  Submit </button>
            </form>
        </div>
    </div>

    <div class="row mt-3">
    <div class="col-md">
        <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button">    <i class="fas fa-print    "></i> Cetak Jurnal</a>
    </div>
    <div class="col-md">
        <h6 class="text-right mt-3">Jurnal Kegiatan</h6>
    </div>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Isi Jurnal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Senin, 12 Oktober 2019</td>
                <td>Pelatihan Matrik</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.navbar')