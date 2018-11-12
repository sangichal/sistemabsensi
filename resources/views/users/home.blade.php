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
            <form action="">
                <div class="form-group">
                    <label for="">Isi Jurnal</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <a name="" id="" class="btn btn-primary" href="#" role="button"> Submit </a>
            </form>
        </div>
    </div>

    <h6 class="text-right mt-3">Jurnal Kegiatan</h6>
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