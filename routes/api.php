<?php

use App\Http\Controllers\AdminPanelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('admin/panel/message', [AdminPanelController::class, 'getMessage'])->name('admin.panel.message');
