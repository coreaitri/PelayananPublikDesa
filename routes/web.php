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
Auth::routes();

//GROUP ROUTENYA KADES
Route::group(['prefix'  =>  'kades'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('kades.login');

    Route::post('login', 'Kades\LoginController@login')->name('kades.login.post');
    Route::get('logout', 'Kades\LoginController@logout')->name('kades.logout');



    Route::group(['middleware' => ['auth:kades']], function () {
        Route::get('/', function () {
            return view('kades.dashboard.homepage');
        })->name('kades.dashboard');

        Route::get('/dataRT', 'Kades\KadesController@index')->name('kades.indexRT');
        Route::get('/createRT', 'Kades\KadesController@create')->name('kades.createRT');
        Route::post('/storeRT', 'Kades\KadesController@store')->name('kades.storeRT');
        Route::get('/dataRT/{id}', 'Kades\KadesController@edit')->name('kades.editRT');
        Route::post('/updateRT/{id}', 'Kades\KadesController@update')->name('kades.updateRT');
        Route::get('/dataRTDelete/{id}', 'Kades\KadesController@destroy')->name('kades.deleteRT');
        Route::get('/listWarga', 'Kades\KadesController@indexWarga')->name('kades.listWarga');

        Route::get('/listSuratMasuk', 'Kades\KadesController@suratMasuk')->name('kades.listSuratMasuk');
    });
});




//GROUP ROUTENYA RT
Route::group(['prefix'  =>  'rt'], function () {
    Route::get('/login', function () {
        return view('auth.loginrt');
    })->name('rt.login');

    Route::post('login', 'RT\LoginController@login')->name('rt.login.post');
    Route::get('logout', 'RT\LoginController@logout')->name('rt.logout');

    Route::group(['middleware' => ['auth:rt']], function () {
        Route::get('/', function () {
            return view('rt.dashboard.homepage');
        })->name('rt.dashboard');


        Route::get('/dataWarga', 'RT\RTController@index')->name('rt.indexWarga');
        Route::get('/createWarga', 'RT\RTController@create')->name('rt.createWarga');
        Route::post('/storeWarga', 'RT\RTController@store')->name('rt.storeWarga');
        Route::get('/dataWarga/{id}', 'RT\RTController@edit')->name('rt.editWarga');
        Route::post('/updateWarga/{id}', 'RT\RTController@update')->name('rt.updateWarga');
        Route::get('/deleteWarga/{id}', 'RT\RTController@destroy')->name('rt.deleteWarga');

        Route::get('/listSuratWarga', 'RT\RTController@suratMasuk')->name('rt.listSuratWarga');

        Route::get('/status/surat', 'RT\RTController@status')->name('rt.statusSurat');
    });
});




//GROUP ROUTENYA WARGA
Route::group(['prefix'  =>  'warga'], function () {
    Route::get('/login', function () {
        return view('auth.loginwarga');
    })->name('warga.login');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', function () {
            return view('warga.dashboard.homepage');
        })->name('warga.dashboard');

        Route::get('/surat/thankyou', function () {
            return view('warga.dashboard.terimakasih');
        })->name('warga.terimakasih');
    });


    Route::get('/suratDomisili', 'Warga\WargaController@suratDomisili')->name('warga.suratDomisili');
    Route::get('/suratPrasejahtera', 'Warga\WargaController@suratPrasejahtera')->name('warga.suratPrasejahtera');

    Route::get('/suratKeluar', 'Warga\WargaController@suratKeluar')->name('warga.suratKeluar');
});
Route::view('/', ('welcome'))->name('welcome');
