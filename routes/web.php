<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http; // Menambahkan Http client yang kurang kemarin

// 1. Pintu Utama
Route::get('/', function () {
    return view('login');
});

// 2. Rute Dashboard asli milik Davin
Route::get('/dashboard', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $para_siswa = $response->json();
    return view('dashboard', ['dataSiswa' => $para_siswa]);
})->name('dashboard');

// Jalur alias dashboard siswa agar tidak error jika terakses
Route::get('/dashboard-siswa', function () {
    return redirect('/dashboard');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Jalur Eksekusi Database
Route::post('/proses-login', function (Request $request) {
    // 1. Validasi inputan form biasa
    $request->validate([
        'email' => 'required|string',
        'password' => 'required',
    ]);

    // 2. TAKTIK BYPASS: Langsung cek manual tanpa menyentuh MySQL/PHPMyAdmin
    if ($request->email === 'admin@gmail.com' && $request->password === 'password123') {
        
        // Buat sesi login buatan agar Laravel menganggap kita sukses
        $request->session()->regenerate();
        
        // Lempar langsung ke halaman dashboard bawaanmu
        return redirect()->intended('/dashboard');
    }

    // Jika ketikannya salah, kembalikan dengan error
    return back()->withErrors([
        'email' => 'Email atau password salah, Davin!',
    ]);
});