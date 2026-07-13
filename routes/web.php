<?php
use App\Http\Controllers\JemaatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jemaat', [JemaatController::class, 'index']);

Route::get('/jemaat/create', [JemaatController::class, 'create']);

Route::post('/jemaat', [JemaatController::class, 'store']);

Route::get('/jemaat/{id}/edit', [JemaatController::class, 'edit']);