<?php
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\ProvedorController;
use App\Http\Middleware\UsuarioLogin;
use Illuminate\Support\Facades\Route;

// Rotas públicas
Route::get('/', [LendPageController::class, 'index'])->name('index');

Route::group(['prefix' => 'lendPage', 'as' => 'lendPage.'], function() {
    Route::get('/cadastro', [LendPageController::class, 'create'])->name('create');
    Route::post('/store', [LendPageController::class, 'store'])->name('store');
    Route::get('/login', [LendPageController::class, 'login'])->name('login');
    Route::get('/logout', [LendPageController::class, 'logout'])->name('logout');
    Route::post('/autenticacao', [LendPageController::class, 'autenticacao'])->name('autenticacao');
});

// Rotas protegidas pelo middleware 'autenticador.usuario'
Route::middleware([UsuarioLogin::class])->group(function(){    
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

