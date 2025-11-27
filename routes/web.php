<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.pages.index');
});

Route::get('/login', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('components.pages.dashboard');
})->name('admin.dashboard');

Route::get('/dashboard/packages', function () {
    return view('components.pages.package');
});

Route::get('/dashboard/packages/view', function () {
    return view('components.pages.package-view');
});

Route::get('/dashboard/package/tokyo-tower', function () {
    return view('components.pages.package-tokyo');
})->name('admin.tokyo');

Route::get('/dashboard/package/gyeongbokgung', function () {
    return view('components.pages.package-gyeongbokgung');
})->name('admin.gyeongbokgung');

Route::get('/dashboard/package/universal', function () {
    return view('components.pages.package-universal');
})->name('admin.universal');
