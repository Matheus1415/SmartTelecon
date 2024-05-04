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

    public function login() {
        return view('Components.login');
    }
}
