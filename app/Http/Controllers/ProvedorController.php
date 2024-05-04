<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    public function index()
    {
        $provedores = Provedor::all();
        $mensagemSucesso = session('mensagemSucesso');
        return view('Components.dashboard.visualisar-provedor', [
            'provedores' => $provedores,
            'mensagemSucesso' => $mensagemSucesso
        ]);
    }  
   
    public function create()
    {
        return view('Components.dashboard.cadastro-provedor');
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
        $provedor = Provedor::find($id);
        return view('Components.dashboar.editar-provedor')->with('provedor', $provedor);
    }

    public function update(ProvedorRequest $request, Provedor $provedor)
    {
        $provedor->fill($request->all());  
        $provedor->save();
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso',"Provedor $provedor->nome foi atualizado!");

    }

    public function destroy(string $id)
    {
        $provedor = Provedor::find($id);
        $provedor->delete();
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', "Provedor '$provedor->nome' foi deletado com sucesso.");
    }
}
