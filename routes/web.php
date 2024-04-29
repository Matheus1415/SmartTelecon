<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LendPageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LendPageController::class, 'index'])->name('lendPage.index');
Route::get('/dashbord',[DashBoardController::class, 'index'])->name('dashBoard.index');
