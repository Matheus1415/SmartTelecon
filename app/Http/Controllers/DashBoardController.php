<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index()
    {
        $usuarioLogado = Auth::user()->nome ?? null;

        // Retornar a view da dashboard com o nome do usuário
        return view('painel.index', ['usuarioLogado' => $usuarioLogado]);    }
}
