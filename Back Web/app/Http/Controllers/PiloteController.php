<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Pilote;

class PiloteController extends Controller
{
    public function main()
    {
        $pilotes = Pilote::all();
        return view('pilote.main', ['pilotes' => $pilotes]);
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
        ]);

        $newPilote = pilote::create($data);

        return redirect(route('pilote.main')); //chose the route apres
    }
    public function edit(Pilote $pilote)
    {
        return view('pilote.edit', ['pilote' => $pilote]);
    }
    public function update(Pilote $pilote, Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'centre' => 'required',
        ]);

        $pilote->update($data);
        return redirect(route('pilote.main'))->with('success', 'pilote Updated successfully');
    }

    public function destroy(Pilote $pilote)
    {
        $pilote->delete();
        return redirect(route('pilote.main'))->with('success', 'pilote Deleted successfully');
    }
}
