<?php

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\FishController;
use App\Http\Controllers\Backend\SupplierController;
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
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show', 'show')->name('show');
        Route::get('/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::delete('/delete', 'destroy')->name('delete');
    });

    Route::controller(SupplierController::class)->prefix('/suppliers')->as('supplier.')->group(function () {
        Route::get('/', 'index')->name('lists');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show/{slug}', 'show')->name('show');
        Route::get('/edit/{slug}', 'edit')->name('edit');
        Route::post('/update/{slug}', 'update')->name('update');
        Route::get('/delete/{slug}', 'destroy')->name('delete');

        // today supplier
        Route::get('/today-supplier/{slug}', 'supplier')->name('today');


        // for pos system , i am making this design
        Route::get('/manage', 'manage')->name('manage');
    });


    Route::controller(CustomerController::class)->prefix('/customers')->as('customer.')->group(function () {

        Route::get('/', 'index')->name('lists');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show/{slug}', 'show')->name('show');
        Route::get('/edit/{slug}', 'edit')->name('edit');
        Route::post('/update/{slug}', 'update')->name('update');
        Route::get('/delete/{slug}', 'destroy')->name('delete');
    });

    Route::controller(TicketController::class)->prefix('/tickets')->as('ticket.')->group(function () {
        Route::get('/ticket-history', 'index')->name('history.lists');
        Route::get('/open-new-ticket', 'create')->name('open.create.ticket');
        Route::post('/store-ticket', 'store')->name('store.ticket');
    });

});
