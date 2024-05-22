<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\NotificationController;

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function () {
//        return view('business.list');
//    });
    Route::get('/', [BusinessController::class, 'index'])->name('list');

//    Route::get('/home', function () {
//        return view('index');
//    });

    Route::group([
        'prefix' => 'business',
    ],
        function () {
            Route::get('/', [BusinessController::class, 'index'])->name('list');
            Route::get('/add', [BusinessController::class, 'create'])->name('add');
            Route::post('/add', [BusinessController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [BusinessController::class, 'edit'])->name('edit');
            Route::put('/{id}/edit', [BusinessController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BusinessController::class, 'destroy'])->name('delete');
        });

    Route::group([
        'prefix' => 'notification',
    ],
        function () {
            Route::get('/list', [NotificationController::class, 'index'])->name('nlist');
            Route::get('/add', [NotificationController::class, 'create'])->name('nadd');
            Route::post('/add', [NotificationController::class, 'store'])->name('nstore');
            Route::get('/{id}/edit', [NotificationController::class, 'edit'])->name('nedit');
            Route::put('/{id}/edit', [NotificationController::class, 'update'])->name('nupdate');
            Route::delete('/delete/{id}', [NotificationController::class, 'destroy'])->name('ndestroy');
            Route::patch('/notifications/{id}/toggle', [NotificationController::class, 'toggleStatus'])->name('toggle');

        });

    //Route::resource('businesses', BusinessController::class);
    Route::get('/subcategories/{category_id}', [BusinessController::class, 'getSubcategories']);

});


Auth::routes();

Route::redirect('/register', '/login');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
