<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Etudiant = Etudiant::all();
        return view('Etudiant.index' ,compact('Etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'Nom_etudiant' => 'required',
            'Prenom_etudiant' => 'required',
            'Centre' => 'required',
            'Promotion' => 'required',
            'E_mail' => 'required',
            'password' => 'required',
        ]);
        
        try {

            $newEtudiant = Etudiant::create($data);
            return redirect()->route('Etudiant.index');

        } catch (\Exception $e) {

            return back()->withInput()->withErrors(['error' => 'Failed to create Etudiant']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $etudiant = Etudiant::all();
        return view('Etudiant.index' ,compact('Etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $Etudiant)
    {
        return view('Etudiant.edit', ['Etudiant' => $Etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Etudiant $Etudiant, Request $request)
    {
        $data = $request->validate([
            'Nom_etudiant' => 'required',
            'Prenom_etudiant' => 'required',
            'Centre' => 'required',
            'Promotion' => 'required',
            'E_mail' => 'required',
            'password' => 'required',
        ]);
            $Etudiant->update($data);
            return redirect()->route('Etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $Etudiant)
    {
        $Etudiant->delete();
        return redirect()->route('Etudiant.index');
    }


    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        $students = Etudiant::where('Nom_etudiant', 'LIKE', "%{$searchQuery}%")
            ->orWhere('Prenom_etudiant', 'LIKE', "%{$searchQuery}%")
            ->orWhere('Centre', 'LIKE', "%{$searchQuery}%")
            ->orWhere('E_mail', 'LIKE', "%{$searchQuery}%")
            ->orWhere('Promotion', 'LIKE', "%{$searchQuery}%")
            ->get();

        return view('Etudiant.index', compact('students'));
    }
    

   
}
