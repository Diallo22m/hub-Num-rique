<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //la fonction qui permet d'afficher la liste des apprenants
    public function apprenants(){
        $participants = Participant::all();
        return view('participant.liste_apprenant', compact('participants'));
    }
    //La fonction qui permet d'afficher le formulaire d'ajout d'apprenant

    Public function ajoutApprenant(){
        return view('participant.ajout-apprenant');
    }

    //La fonction qui permet de valider l'ajout d'un apprenant
    public function store(Request $request){
        //Validation des données
        $participant = $request->validate([
            'nom' => 'required|string|max:50',    
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|unique:participants,telephone|string|max:9',
            'adresse' => 'required|string',
            'profession' => 'required|string',
        ],
        [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.unique' => 'Ce numéro de téléphone existe déjà.',
            'adresse.required' => "L'adresse est obligatoire.",
            'profession.required' => 'La profession est obligatoire.',
            'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 9 caractères.',
        ]);
        //Enregistrement des données dans la base de données
        $participant = new Participant();
        $participant->nom = $request->nom;
        $participant->prenom = $request->prenom;
        $participant->telephone = $request->telephone;
        $participant->adresse = $request->adresse;
        $participant->profession = $request->profession;
        $participant->save();
        //Redirection vers la liste des apprenants avec un message de succès
        return redirect()->route('apprenants.liste')->with('success', 'Apprenant ajouté avec succès.');
    }
    //La fonction qui permet d'afficher les détails d'un apprenant
    public function details($id){
        $participant = Participant::findOrFail($id);        
        return view('participant.details-apprenant', compact('participant'));
    }
    //La fonction qui permet de modifier un apprenant
    public function update(Request $request, $id){
        //contrôle des données
        $participant = $request->validate([
            'nom' => 'required|string|max:50',    
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|string|max:9|unique:participants,telephone,'.$id,
            'adresse' => 'required|string',         
            'profession' => 'required|string',
        ],
        [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.unique' => 'Ce numéro de téléphone existe déjà.',
            'adresse.required' => "L'adresse est obligatoire.",     
            'profession.required' => 'La profession est obligatoire.',
            'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 9 caractères.',
        ]);
        //Mise à jour des données dans la base de données
        $participant = Participant::findOrFail($id);
        $participant->nom = $request->nom;
        $participant->prenom = $request->prenom;
        $participant->telephone = $request->telephone;
        $participant->adresse = $request->adresse;  
        $participant->profession = $request->profession;
        $participant->save();
        //Redirection vers la liste des apprenants avec un message de succès
        return redirect()->route('apprenants.liste')->with('success', 'Apprenant modifié avec succès.');
    }
    //La fonction qui permet de supprimer un apprenant
    public function destroy($id){
        $participant = Participant::findOrFail($id);
        $participant->delete();
        //Redirection vers la liste des apprenants avec un message de succès
        return redirect()->route('apprenants.liste')->with('success', 'Apprenant supprimé avec succès.');
    }

}
