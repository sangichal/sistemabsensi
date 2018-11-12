<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::post('signIn', [
    'uses' => 'Controller@signIn', 
    'as' => 'signIn' ]
);

Route::get('dashboard', 
    ['uses' => 'ControllerAdmin@dashboard',
    'as' => 'dashboard']
);

Route::get('dataGuru', 
    ['uses' => 'ControllerAdmin@dataGuru',
    'as' => 'dataGuru']
);

Route::get('tambahGuru', 
    ['uses' => 'ControllerAdmin@tambahGuru',
    'as' => 'tambahGuru']
);

Route::view('detailGuru', 'admin/detailGuru');

Route::view('homeUsers', 'users/home');

Route::view('jadwalUsers', 'users/jadwal');