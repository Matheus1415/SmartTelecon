<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\ProvedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Middleware\UsuarioLogin;


//Rota de erro
Route::fallback(function () {
    return view('Components.erro');
});

// Rotas públicas
Route::get('/', [LendPageController::class, 'index'])->name('index');
Route::get('/login', [ControllersLoginController::class, 'index'])->name('login.index');
Route::post('/validate', [ControllersLoginController::class, 'store'])->name('login.store');
Route::get('/logout', [ControllersLoginController::class, 'destroy'])->name('logout.destroy'); 

Route::group(['prefix' => 'lendPage', 'as' => 'lendPage.'], function() {
    Route::get('/cadastro', [LendPageController::class, 'create'])->name('create');
    Route::post('/store', [LendPageController::class, 'store'])->name('store');
});

// Rotas protegidas pelo middleware 'UsuarioLogin'
Route::middleware(UsuarioLogin::class)->group(function(){    
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function(){
        Route::get('/', [DashBoardController::class, 'index'])->name('index');

        Route::group(['prefix' => 'provedor', 'as' => 'provedor.'], function () {
            Route::get('/lista', [ProvedorController::class, 'index'])->name('index');
            Route::get('/cadastro', [ProvedorController::class, 'create'])->name('create');
            Route::post('/store', [ProvedorController::class, 'store'])->name('store');
            Route::delete('/deletar/{id}', [ProvedorController::class, 'destroy'])->name('destroy');
            Route::get('/{id}/edit', [ProvedorController::class, 'edit'])->name('edit');
            Route::put('/update/{provedor}', [ProvedorController::class, 'update'])->name('update');
        });
    });
});
