<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Planos;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index()
    {
        $usuarioLogado = Auth::user()->nome;
        $usuarioId = Auth::user()->id;
        $totalPlanos = Planos::where('planos_user_id', $usuarioId)->count();
        $quantidadeUser = Usuario::count();
        $totalValorCompras = Compra::where('referencia_user', $usuarioId)->sum('valor');
        $quantidadeCompra = Compra::where('referencia_user', $usuarioId)->count();
        
        return view('painel.index', [
            'usuarioLogado' => $usuarioLogado,
            'quantidadeUser' => $quantidadeUser,
            'totalPlanos' => $totalPlanos,
            'totalValorCompras' => $totalValorCompras,
            'quantidadeCompra' => $quantidadeCompra,
        ]);    
    }

    public function historico()
    {
        $usuarioId = Auth::user()->id;
        $vendas = Compra::where('referencia_user', $usuarioId)->get();
    
        return view('Components.dashboard.compra', ['vendas' => $vendas]);
    }
    

}
