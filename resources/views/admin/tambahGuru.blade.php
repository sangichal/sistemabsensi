@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <h3>Halaman Tambah Data Guru</h3>
            <hr>
            <form method="post" id="tabelDaftar" action="{{ route("saveGuru") }}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2 d-flex align-items-center">
                        <img class="card-img-top" src="{{ asset('assets/users.png')}}">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md">
                        <div class="form-row">
                            <div class="form-group col-md">
                                <input minlength="11" type="number" id="nik" placeholder="NIK" name="NIK" class="form-control"
                            title="Mohon Masukan 11 Digit" value="{{ Request::old('NIK')}}" required>
                            </div>
                            <div class="form-group col-md">
                                <input id="nama" type="text" placeholder="Nama" name="nama" class="form-control" value="{{ Request::old('nama')}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span id="tempatLahir" class="input-group-text mr-2"><i class="fas fa-map"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="TptLahir" type="em" class="form-control" placeholder="Tempat Lahir"
                                        value="{{ Request::old('TptLahir')}}"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mr-2"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input id="tanggal" name="TglLahir" type="date" placeholder="Tempat Tanggal Lahir"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mr-2"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input id="email" name="Email" type="email" placeholder="Email" class="form-control"
                                        value="{{ Request::old('Email')}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mr-2"> <i class="fas fa-transgender"></i> </span>
                                    </div>
                                    <div class="custom-file">
                                        <select name="JnsKel" id="" class="form-control">
                                            <option value="Laki Laki"> Laki Laki </option>
                                            <option value="Perempuan"> Perempuan </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md">
                                <select name="Agama" id="" class="form-control">
                                    <option value="Islam"> Islam </option>
                                    <option value="Kristen"> Kristen </option>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <select name="Pendidikan" id="" class="form-control">
                                    <option value="S1"> S1 </option>
                                    <option value="SMK"> SMK </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <textarea name="Alamat" class="form-control" id="" cols="30"> {{ Request::old('Alamat')}}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input id="foto" name="foto" type="file" class="custom-file-input" id="inputGroupFile01"
                                            value="$foto['file_name']">
                                        <label for="foto" class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-auto">
                                <div>
                                    <button class="btn btn-primary" type="submit" id="daftar"> <i class="fas fa-sign-in-alt"></i>
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Tambah Data Guru</h4>
                <p class="mb-0"> di halaman ini admin dapat menambahkan data guru, dimana nantinya guru akan
                    mendapatkan password melalui email yang telah dimasukan untuk dapat login melalui sistem </p>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="row">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
@extends('layouts.body')
@extends('layouts.navbar')

@extends('layouts.header')