<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home() {
        $pois = Poi::all();
        return view('welcome' , compact('pois'));
    }

    public function destroyUser(){

        $user_poi = Auth::user()->pois;

        foreach($user_poi as $poi){
            $poi->update([
                'user_id' => NULL,
            ]);
        }

        Auth::user()->delete();
        return redirect(route('home'))->with('message' , 'utente cancellato');
    }
}
