<?php

namespace App\Http\Controllers;

use App\Models\Internships;
use App\Models\Competence;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    public function index()
    {
        $internships = Internships::with('competences')->get();
        return view('internships.index', compact('internships'));
    }

    public function create()
    {
        $competences = Competence::all();
        return view('internships.create', compact('competences'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'localite' => 'required',
            'duree' => 'required',
            'promo' => 'required',
            'salaire' => 'required',
            'entreprise' => 'required',
            'date' => 'required|date',
            'number_place' => 'required|integer',
            'competences' => 'required|array',
            'competences.*' => 'exists:competences,id',
        ]);

        $competences = $request->input('competences', []);
        unset($validatedData['competences']);

        $internship = Internships::create($validatedData);
        $internship->competences()->attach($competences);

        return redirect()->route('internships.index');
    }
    public function edit(Internships $internship)
    {
        $competences = Competence::all();
        return view('internships.edit', compact('internship', 'competences'));
    }

    public function update(Request $request, Internships $internship)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'localite' => 'required',
            'duree' => 'required',
            'promo' => 'required',
            'salaire' => 'required',
            'entreprise' => 'required',
            'date' => 'required|date',
            'number_place' => 'required|integer',
            'competences' => 'required|array',
            'competences.*' => 'exists:competences,id',
        ]);

        $internship->update($validatedData);

        $internship->competences()->sync($request->input('competences', []));

        return redirect()->route('internships.index')->with('success', 'Internship Updated Successfully');
    }

    public function destroy(Internships $internship)
    {
        $internship->delete();

        return back()->with('success', 'Internship Deleted Successfully');
    }
}
