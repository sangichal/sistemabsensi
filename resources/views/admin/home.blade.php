@extends('layouts.header')

@section('isiNavbar')
<li class="nav-item active">
    <a href="{{ route('dashboard') }}" class="nav-link"> <i class="fas fa-calendar-alt mr-2"></i> Jadwal Kegiatan </a>
</li>
<li class="nav-item">
    <a href="{{ route('dataGuru') }}" class="nav-link"> <i class="fas fa-database mr-2"></i> Data Guru </a>
</li>
<li class="nav-item">
    <a href="" class="nav-link"> <i class="fas fa-sign-out-alt mr-2"></i> Keluar </a>
</li>
@endsection

@extends('layouts.body')
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <h6 class="text-right">Jadwal Kegiatan</h6>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th class="align-middle" rowspan="2">Jam</th>
                        <th class="align-middle">Senin</th>
                        <th colspan="3">
                            Kelas
                            <a href="#" class="float-right">
                                <button class="btn btn-primary btn-sm"> Tambah Kelas</button>
                            </a>
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Waktu</th>
                        <th>X RPL 1</th>
                        <th>X RPL 2</th>
                        <th>X RPL 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12172198</td>
                        <td>Nursinta</td>
                        <td>Nursinta</td>
                        <td>Nursinta</td>
                    </tr>
                </tbody>
            </table>

            <form action="">
                <div class="form-row">
                    <div class="form-group col-md">
                        <select name="namaGuru" id="" class="form-control">
                            <option value=""> Nursinta </option>
                        </select>
                    </div>
                    <div class="form-group col-md">
                        <input id="nama" type="text" placeholder="Nama Kelas" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Masukan</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Jadwal Kegiatan</h4>
                <p class="mb-0"> Di halaman ini admin dapat menambahkan kelas mengatur jadwal mengatur jadwal guru dan
                    lain sebagainya. </p>
            </div>
        </div>
    </div>
</div>


@endsection



@extends('layouts.navbar')