<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();

        return view('chambres.index', compact('chambres'));
    }
    public function show(Chambre $chambre)
    {
        return view('chambres.show', compact('chambre'));
    }
    


}

