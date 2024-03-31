<?php

namespace App\Http\Controllers;

use App\Models\Internships;
use App\Models\Competence;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    public function index(Request $request)
    {
        $query = Internships::query();

        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }
        if ($request->filled('localite')) {
            $query->where('localite', 'like', '%' . $request->localite . '%');
        }
        if ($request->filled('duree')) {
            $query->where('duree', 'like', '%' . $request->duree . '%');
        }
        if ($request->filled('promo')) {
            $query->where('promo', $request->promo);
        }
        if ($request->filled('salaire')) {
            $query->where('salaire', '>=', $request->salaire);
        }
        if ($request->filled('entreprise')) {
            $query->where('entreprise', 'like', '%' . $request->entreprise . '%');
        }
        if ($request->filled('date')) {
            $query->whereDate('date', '=', $request->date);
        }
        if ($request->filled('competences')) {
            $competences = array_map('trim', explode(',', $request->competences));
            $query->whereHas('competences', function ($q) use ($competences) {
                $q->whereIn('name', $competences);
            });
        }

        $internships = $query->get();

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
