<?php

namespace App\Http\Controllers;

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
        return view('painel.index', [
            'usuarioLogado' => $usuarioLogado,
            'quantidadeUser' => $quantidadeUser,
            'totalPlanos' => $totalPlanos,
        ]);    
    }
}
