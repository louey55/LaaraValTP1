<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant; // Utilisez Models avec un "M" majuscule

class EtudiantController extends Controller
{
    public function index()
    {
        $liste = Etudiant::orderby('nom', 'asc')->get(); // Utilisez 'Etudiant'
        
        return view('etudiant', compact('liste')); // Passez 'liste' à la vue
    }
}
