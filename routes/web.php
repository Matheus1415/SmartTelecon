<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\PlanosInternetController;
use App\Http\Middleware\UsuarioLogin;

// Rota de erro
Route::fallback(function () {
    return view('Components.erro');
});

// Rotas públicas
Route::get('/', [LendPageController::class, 'index'])->name('index');
Route::get('/create', [LendPageController::class, 'create'])->name('lendPage.create');
Route::post('/store', [LendPageController::class, 'store'])->name('lendPage.store');
Route::get('/login', [ControllersLoginController::class, 'index'])->name('login.index');
Route::post('/validate', [ControllersLoginController::class, 'store'])->name('login.store');
Route::get('/logout', [ControllersLoginController::class, 'destroy'])->name('logout.destroy');

// Rotas protegidas pelo middleware 'UsuarioLogin'
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashBoardController::class, 'index'])->name('index');

        // Rotas relacionadas aos provedores
        Route::prefix('provedor')->name('provedor.')->group(function () {
            Route::get('/lista', [ProvedorController::class, 'index'])->name('index');
            Route::get('/cadastro', [ProvedorController::class, 'create'])->name('create');
            Route::post('/store', [ProvedorController::class, 'store'])->name('store');
            Route::delete('/deletar/{id}', [ProvedorController::class, 'destroy'])->name('destroy');
            Route::get('/provedor/{idUsuario}/{idProvedor?}/edit', [ProvedorController::class, 'edit'])->name('edit');
            Route::put('/update/{idUsuario}/{idProvedor?}', [ProvedorController::class, 'update'])->name('update');
        });

        // Rotas relacionadas aos planos de internet
        Route::prefix('planos-internet')->name('planos.')->group(function () {
            Route::get('/lista', [PlanosInternetController::class, 'index'])->name('index');
            Route::get('/cadastro', [PlanosInternetController::class, 'create'])->name('create');
            Route::post('/store', [PlanosInternetController::class, 'store'])->name('store');
            Route::delete('/deletar/{id}', [PlanosInternetController::class, 'destroy'])->name('destroy');
            Route::get('/provedor/{id}/edit', [PlanosInternetController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PlanosInternetController::class, 'update'])->name('update');
        });
    });
});
