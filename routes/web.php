<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LendPageController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\PlanosInternetController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\UsuarioLogin;

// Rota de erro
Route::fallback(function () {
    return view('Components.erro');
});

// Rotas públicas
Route::get('/', [LendPageController::class, 'index'])->name('index');
Route::get('/create', [LendPageController::class, 'create'])->name('lendPage.create');
Route::post('/store', [LendPageController::class, 'store'])->name('lendPage.store');
//ESSA ROTA É PARA FINS DE TESTE TERI QUE TER UMA VALIDAÇÃO MAIS ROGOROSA
Route::post('/comprar/{valor}/{idVendedor}/{idPlano}', [LendPageController::class, 'comprar'])->name('lendPage.comprar');
//Rota de Compra
Route::get('/compra/{idPlano}',[LendPageController::class, 'comprarPlano'])->name('comprarPlano');
Route::post('/venda/{idPlano}',[LendPageController::class, 'venda'])->name('venda');
//Rotas de Login
Route::get('/login', [ControllersLoginController::class, 'index'])->name('login');
Route::post('/validate', [ControllersLoginController::class, 'store'])->name('login.store');
Route::get('/logout', [ControllersLoginController::class, 'destroy'])->name('logout.destroy');


// Rotas protegidas pelo middleware 'Auth'
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashBoardController::class, 'index'])->name('index');
        Route::get('historico-vendas', [DashBoardController::class, 'historico'])->name('historico-vendas');

        // Rotas relacionadas aos usuarios do sistema   
        Route::prefix('usuario')->name('usuario.')->group(function () {
            Route::get('/lista', [UsuarioController::class, 'index'])->name('index');
            Route::get('/cadastro', [UsuarioController::class, 'create'])->name('create');
            Route::post('/store', [UsuarioController::class, 'store'])->name('store');
            Route::delete('/deletar/{id}', [UsuarioController::class, 'destroy'])->name('destroy');
            Route::get('/usuario/{idUsuario}/edit', [UsuarioController::class, 'edit'])->name('edit');
            Route::put('/update/{idUsuario}', [UsuarioController::class, 'update'])->name('update');
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
