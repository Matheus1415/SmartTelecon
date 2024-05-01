<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
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
        $formProvedor = $request->validate();
        
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
