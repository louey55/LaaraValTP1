<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $nom='BOUHDIDA ';
        $prenom='Omar';
        return view ('etudiant', compact('nom','prenom'));
    }
}
