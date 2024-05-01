<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }
    


    public function create()
    {
        //
    }

    public function store(ProvedorRequest $request)
    {
        $validatedData = $request->validated();
        $provedor = Provedor::create($validatedData);
        return redirect()->route('dashboard.provedor.index');
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
