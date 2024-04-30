<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () 
{
    return view('about');
});

Route::get('/belajar', function ()
{
    echo '<h1>welcome shaq</h1>';
});

// yang ini kalau gamau pake set default
// Route::get('/mahasiswa/{nama}', function($nama)
// {
//     return "Data mahasiswa yang tampil $nama";
// });

// set default gausah isi semua bisa kosong, nanti akan muncul sesuai dengan variable yang udah ditentukan
Route::get('/mahasiswa/{nama?}/{kelas?}', function($nama = 'anto', $kelas = 'ppti14')
{
    return "Data mahasiswa yang tampil $nama - $kelas";
});

// regex

Route::get('/users/{id}', function($id)
{
    return "tampilkan id $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::prefix('/admin')->group(function()
{
    Route::get('/', function()
    {
        return "<h1>admin</h1>";
    });
    Route::get('/mahasiswa', function() 
    {
        return '<h1>daftar mahasiswa</h1>';
    });
    Route::get('/dosen', function() 
    {
        return '<h1>daftar dosen</h1>';
    });
    Route::get('/karyawan', function() 
    {
        return '<h1>daftar karyawan</h1>';
    });
});

// Route:: <Jenis_Method>(URL, process diexec)

// get, post, put, delete

// php artisan route:list -> untuk melihat route yang udah dibuat