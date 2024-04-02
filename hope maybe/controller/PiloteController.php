<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Pilote;
use App\Models\User;
class PiloteController extends Controller
{
    public function index(){

        return view('pilote.index');
    }
  
    public function form(){
        return view('pilote.form');
    }

    public function home(){

        $pilotes = Pilote::all();
        return view('pilote.home', compact('pilotes'));
        
    }

    public function edit(Pilote $pilote){
        return view('pilote.edit', ['pilote' => $pilote]);
    }

   public function destroy(Pilote $pilote){
    $pilote->delete();
    return redirect(route('pilote.home'));
   }


   
 

   public function create(Request $request)
{
    $validatedData = $request->validate([
        'Nom_pilote' => 'required',
        'Prenom_pilote' => 'required',
        'Centre' => 'required',
        'Promotion' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    try {
        try {
            $user = User::create([
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'type' => 1,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        try {
            $newPilote = $user->pilote()->create([
                'Nom_pilote' => $validatedData['Nom_pilote'],
                'Prenom_pilote' => $validatedData['Prenom_pilote'],
                'Centre' => $validatedData['Centre'],
                'Promotion' => $validatedData['Promotion'],
                'ID_users' => $user->ID_users,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect(route('pilote.home'));
    } catch (\Exception $e) {
        return back()->withInput()->withErrors(['error' => 'Failed to create Pilote']);
    }
}
    
    public function update(Pilote $pilote ,Request $request) {
        $data = $request->validate([
            'Nom_pilote' => 'required',
            'Prenom_pilote' => 'required',
            'Centre' => 'required',
            'password' => 'required',
            'email' => 'required',
            'Promotion' => 'required',
        ]);
    
        $pilote->update($data);
    
        return redirect(route('pilote.home'))->with('success', 'Pilote Updated Successfully');
    }
    
    public function search(Request $request){
        
        $query = $request->input( 'query');

         
        $pilotes = Pilote::where('Nom_pilote', 'LIKE', "%$query%")
                        ->orWhere('Prenom_pilote', 'LIKE', "%$query%")
                        ->orWhere('Centre', 'LIKE', "%$query%")
                        ->orWhere('E_mail', 'LIKE', "%$query%")
                        ->orWhere('Promotion', 'LIKE', "%$query%")
                        ->get();


            return view('pilote.home', compact('pilotes'));
    }


}


