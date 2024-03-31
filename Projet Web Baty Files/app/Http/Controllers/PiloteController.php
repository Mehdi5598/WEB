<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilote;

class PiloteController extends Controller
{
    public function main(Request $request)
    {
        $query = Pilote::query();

        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }
        if ($request->filled('prenom')) {
            $query->where('prenom', 'like', '%' . $request->prenom . '%');
        }
        if ($request->filled('centre')) {
            $query->where('centre', 'like', '%' . $request->centre . '%');
        }
        if ($request->filled('promo')) {
            $query->where('promo', 'like', '%' . $request->promo . '%');
        }

        $pilotes = $query->paginate(10);

        return view('pilote.main', compact('pilotes'));
    }

    public function create()
    {
        return view('pilote.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'centre' => 'required',
            'promo' => 'required',
        ]);

        Pilote::create($data);

        return redirect(route('pilote.main'))->with('success', 'Pilote Created Successfully');
    }

    public function edit(Pilote $pilote)
    {
        return view('pilote.edit', ['pilote' => $pilote]);
    }

    public function update(Request $request, Pilote $pilote)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'centre' => 'required',
            'promo' => 'required',
        ]);

        $pilote->update($data);

        return redirect(route('pilote.main'))->with('success', 'Pilote Updated Successfully');
    }

    public function destroy(Pilote $pilote)
    {
        $pilote->delete();

        return back()->with('success', 'Pilote Deleted Successfully');
    }
}
