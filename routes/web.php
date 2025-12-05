<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/immunization', function () {
    return view('pages.immunization');
})->name('immunization');

Route::get('/inventory', function () {
    return view('pages.inventory');
})->name('inventory');

Route::get('/appointments', function () {
    return view('pages.appointments');
})->name('appointments');

Route::get('/reports', function () {
    return view('pages.reports');
})->name('reports');

Route::get('/architecture', function () {
    return view('pages.architecture');
})->name('architecture');