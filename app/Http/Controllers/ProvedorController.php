<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{

    public function index()
    {
        $mensagemSucesso = session('mensagemSucesso');
        return view('painel.provedor')->with('mensagemSucesso', $mensagemSucesso);
    }
   
    public function create()
    {
        return view('painel.provedor');
    }
    
    

    public function store(ProvedorRequest $request)
    {
        $validatedData = $request->validated();

        $provedor = Provedor::create($validatedData);

        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', 'Foi criado com sucesso o provedor');
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
