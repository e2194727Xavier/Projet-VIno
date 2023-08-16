<?php

namespace App\Http\Controllers;
use App\Services\SAQService;

class SaqController extends Controller
{
    public function updateSAQ(SAQService $saqService)
    {
            // Appeler la fonction getProduits sans spécifier de paramètres.
            $results = $saqService->fetchProduit();
            return response()->json(['results' => $results]);
        
    }
}
