@extends('layouts.header')
@section('title')
Halaman Login
@endsection

@extends('layouts.body')

@section('body')

<body>
    <form method="POST" action="{{ route('signIn') }}" class="myForm">
        <h6>Sistem Absensi Online</h6>
        Untuk mendapatkan akses masuk, silahkan minta admin untuk memasukan data guru, password akan di
        kirimkan melalui email yang telah di masukan.
        <div class="form-group mt-3">
            <input type="text" placeholder="Username" name="username" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name='password' placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-raised btn-primary col-md">Login</button>
        <input type="hidden" name='_token' value="{{ csrf_token() }}">
    </form>
</body>
@endsection

@extends('layouts.navbar')