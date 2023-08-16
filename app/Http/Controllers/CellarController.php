<?php

namespace App\Http\Controllers;

use App\Models\Cellar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CellarController extends Controller
{
    /**
     * Afficher une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cellars = Cellar::all();

        return response()->json(['success' => true, 'data' => $cellars]);
    }

    /**
     * Stocker une nouvelle ressource créée dans le stockage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $cellar = Cellar::create($data);

        return response()->json(['success' => true, 'message' => 'Cellar created successfully', 'data' => $cellar]);
    }
}
