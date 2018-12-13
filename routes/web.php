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
})->name('home');

Route::post('signIn', [
    'uses' => 'Controller@signIn', 
    'as' => 'signIn' ]
);

Route::get('dashboard', 
    [
    'uses' => 'ControllerAdmin@dashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
    ]
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

Route::post('/isiJurnal', [
    'uses' => 'KegiatanController@isiJurnal',
    'as' => 'isiJurnal'
]);

Route::post('/saveGuru', 
['uses' => 'ControllerAdmin@saveGuru',
'as' =>'saveGuru'
]
);