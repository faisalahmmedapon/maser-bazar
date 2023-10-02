<?php

use App\Http\Controllers\Backend\SupplierController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('/system')->group(function () {

    Route::controller(SupplierController::class)->prefix('/suppliers')->as('supplier.')->group(function () {
        Route::post('/shellfish', 'shellfish')->name('shellfish');
        Route::get('/supplier_sell_fishes/{id}', 'supplier_sell_fishes')->name('supplier_sell_fishes');
        Route::get('/update-supplier-sell-fishes/{id}', 'update_supplier_sell_fishes')->name('update_supplier_sell_fishes');
        Route::post('/update-supplier-sell-fishes-row/{id}', 'update_supplier_sell_fishes_row')->name('update_supplier_sell_fishes_row');
        Route::get('/delete-supplier-sell-fishes/{id}', 'delete_supplier_sell_fishes')->name('delete_supplier_sell_fishes');
        Route::post('/supplier-sell-fish-price/calculate', 'supplier_sell_fish_price_calculate')->name('supplier_sell_fish_price_calculate');
        Route::get('/supplier-sell-fish-search', 'fish_search')->name('fish_search');
        Route::get('/print/{id}', 'print')->name('print');

    });
});
