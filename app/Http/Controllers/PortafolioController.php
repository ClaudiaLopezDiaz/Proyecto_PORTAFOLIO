<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rpyecto;

class PortafolioController extends Controller
{
    //
    public function index()
    {
        $rpyectos = Rpyecto::paginate();

        return view('welcome', compact('rpyectos'));
           
    }
}
