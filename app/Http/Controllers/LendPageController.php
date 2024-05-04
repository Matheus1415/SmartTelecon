<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendPageController extends Controller
{

    public function index()
    {
        return view('lendPage.index');
    }

    public function create()
    {
        return view('Components.cadastro-lend-page');
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
