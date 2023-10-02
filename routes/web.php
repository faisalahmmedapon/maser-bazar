<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


require __DIR__ . '/auth.php';
require __DIR__ . '/role.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/for_ajax_request.php';

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login.create');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
