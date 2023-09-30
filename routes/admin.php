<?php

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\FishController;
use App\Http\Controllers\Backend\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::middleware(['auth'])->prefix('/system')->group(function () {

    Route::controller(EmployeeController::class)->prefix('/employees')->as('employee.')->group(function () {
        Route::get('/employee-lists', 'index')->name('lists');
        Route::get('/add-new-employee', 'create')->name('create.employee');
        Route::post('/store-employee', 'store')->name('store.employee');
    });
    Route::controller(FishController::class)->prefix('/fishes')->as('fish.')->group(function () {
        Route::get('/', 'index')->name('lists');
        Route::get('/create-fish', 'create')->name('create.fish');
        Route::post('/store-fish', 'store')->name('store.fish');
        Route::post('/show-fish', 'show')->name('show.fish');
        Route::get('/edit-fish', 'edit')->name('edit.fish');
        Route::post('/update-fish', 'update')->name('update.fish');
        Route::delete('/delete-fish', 'destroy')->name('delete.fish');

    });
    Route::controller(CustomerController::class)->prefix('/customers')->as('customer.')->group(function () {
        Route::get('/customer-lists', 'index')->name('lists');
        Route::get('/add-new-customer', 'create')->name('create.customer');
        Route::post('/store-customer', 'store')->name('store.customer');
    });
    Route::controller(TicketController::class)->prefix('/tickets')->as('ticket.')->group(function () {
        Route::get('/ticket-history', 'index')->name('history.lists');
        Route::get('/open-new-ticket', 'create')->name('open.create.ticket');
        Route::post('/store-ticket', 'store')->name('store.ticket');
    });

});
