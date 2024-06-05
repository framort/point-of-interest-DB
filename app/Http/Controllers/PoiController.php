<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\PoiRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

class PoiController extends Controller
{
    public function getPoiByUSer(User $user)
    {
        // $user = User::find($id);
        // $pois = $user->pois;
        return view('poi.userPoi', compact('user'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pois = Poi::all();
        return view('poi.index', compact('pois'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PoiRequest $request)
    {

        $poi = Auth::user()->pois()->create(
            [
                'name' => $request->input('name'),
                'indirizzo' => $request->input('indirizzo'),
                'latitudine' => $request->input('latitudine'),
                'longitudine' => $request->input('longitudine')

            ]
        );
        $poi->tags()->sync($request->input('tag_id'));

        return redirect()->route('poi.index')->with('message', 'P.O.I. inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poi $poi)
    {
         return view('poi.show' , compact('poi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poi $poi)
    {
        return view('poi.edit' , compact('poi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PoiRequest $request, Poi $poi)
    {
        $poi->update([
            'name' => $request->input('name'),
            'indirizzo' => $request->input('indirizzo'),
            'latitudine' => $request->input('latitudine'),
            'longitudine' => $request->input('longitudine')
        ]);
        $poi->tags()->sync($request->input('tag_id'));
        return redirect(route('poi.index'))->with('message' , 'Articolo Modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poi $poi)
    {
        foreach($poi->tags as $tag){
            $tag->pois()->detach($poi->id);
        }
        $poi->delete();
        return redirect(route('poi.index'))->with('message' , 'Articolo cancellato');
    }
}
