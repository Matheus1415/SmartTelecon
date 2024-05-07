<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class planosInternetController extends Controller
{

    public function index()
    {
        $usuario = Auth::user();
        $usuarioLogado = $usuario->nome;
       return view('Components.dashboard.visualisar-planos', [
            'usuarioLogado' => $usuarioLogado
       ]);
    }


    public function create()
    {
        $usuario = Auth::user();
        $usuarioLogado = $usuario->nome;
        return view('Components.dashboard.cadastro-planos', [
            'usuarioLogado' => $usuarioLogado
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
