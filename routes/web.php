<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\ProvedorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LendPageController::class, 'index'])->name('lendPage.index');

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
],function(){
    Route::get('/',[DashBoardController::class, 'index'])->name('index');
    Route::get('/cadastroProvedor',[DashBoardController::class, 'index'])->name('provedor.index');
});

Route::group([
    'prefix' => 'provedor',
    'as' => 'provedor.',
], function () {
    Route::post('/cadastro', [ProvedorController::class, 'store'])->name('store');
});