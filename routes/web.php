<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.front-page.index');
})->name('home');
Route::post('contact', [AdminPanelController::class, 'store'])->name('contact.store');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::middleware('admin.login')->post('login', [LoginController::class, 'login'])->name('login');

Route::middleware('admin.page')->get('admin/panel', [AdminPanelController::class, 'index'])->name('admin.panel');
Route::middleware('admin.page')->get('admin/panel/message', [AdminPanelController::class, 'getMessage'])->name('admin.panel.message');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
