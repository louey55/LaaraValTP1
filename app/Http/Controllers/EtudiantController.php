<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant; 
use App\Models\Classe;

class EtudiantController extends Controller
{
    public function index()
    {
        // Récupère la liste des étudiants triée par nom
        $liste = Etudiant::orderby('nom', 'asc')->get();
        
        // Retourne la vue 'etudiant' avec la liste des étudiants
        return view('etudiant', compact('liste'));
    }

    public function create()
    {
        // Récupère toutes les classes
        $classe = Classe::all();  // Correction de l'opérateur =
        
        // Retourne la vue 'create' avec la liste des classes
        return view('create', compact('classes'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',    // Utilisation correcte de =>
            'prenom' => 'required', // Utilisation correcte de =>
            'classes_id' => 'required'
        ]);

        // Création de l'étudiant
        Etudiant::create($request->all());

        // Redirection avec un message de succès
        return redirect()->route('etudiant')->with('success', 'Student created successfully.');
    }





    public function edit(Etudiant $etudiant) {

        $classes=Classe::all();
        return view('edit', compact('etudiant', 'classes'));
    }
        
    public function update(Request $request, Etudiant $etudiant)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classes_id' => 'required'
        ]);
    
        // Mise à jour de l'étudiant
        $etudiant->update([
            'nom' => $request->nom, // Assurez-vous que l'assignation est correcte
            'prenom' => $request->prenom,
            'classes_id' => $request->classes_id
        ]);
    
        // Redirection avec un message de succès
        return redirect()->route('etudiant')->with('success', 'Student updated successfully');
    }

    public function show(Etudiant $etudiant)
{
    return view('show',compact('etudiant'));
}    

   public function delete(Etudiant $etudiant)
   {
       $etudiant->delete();
       return redirect()->route('etudiant')
                       ->with('success','Post deleted successfully'); 
   }
    }


