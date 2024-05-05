<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Autenticador;

class DashBoardController extends Controller
{


    public function index()
    {
        return view('painel.index');
    }
}

