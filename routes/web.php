<?php

use App\Http\Controllers\LendPageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LendPageController::class, 'index'])->name('lendPage');
