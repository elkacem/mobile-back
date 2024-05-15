<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::group([
    'prefix' => 'business',
],
    function () {
        Route::get('/list', [BusinessController::class, 'index'])->name('list');
        Route::get('/add', [BusinessController::class, 'create'])->name('add');
        Route::post('/add', [BusinessController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BusinessController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [BusinessController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BusinessController::class, 'destroy'])->name('delete');
    });

//Route::resource('businesses', BusinessController::class);
Route::get('/subcategories/{category_id}', [BusinessController::class, 'getSubcategories']);
