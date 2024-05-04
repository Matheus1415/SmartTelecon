<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\ProvedorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LendPageController::class, 'index'])->name('index');
Route::group(['prefix' => 'lendPage', 'as' => 'lendPage.'], function() {
    Route::get('/cadastro',[LendPageController::class, 'create'])->name('create');
    Route::get('/store',[LendPageController::class, 'store'])->name('store');
    Route::get('/login',[LendPageController::class, 'login'])->name('login');
});

Route::group(['prefix' => 'dashboard','as' => 'dashboard.'],function(){
    Route::get('/',[DashBoardController::class, 'index'])->name('index');

    Route::group(['prefix' => 'provedor','as' => 'provedor.'], function () {
        Route::get('/lista', [ProvedorController::class, 'index'])->name('index');
        Route::get('/cadastro', [ProvedorController::class, 'create'])->name('create');
        Route::post('/store', [ProvedorController::class, 'store'])->name('store');
        Route::delete('/deletar/{id}',[ProvedorController::class, 'destroy'])->name('destroy');
        Route::get('/{id}/edit',[ProvedorController::class,'edit'])->name('edit');
        Route::put('/update/{provedor}',[ProvedorController::class,'update'])->name('update');
    });
});

