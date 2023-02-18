<?php

namespace App\Http\Controllers;

use App\Models\condidat;
use Illuminate\Http\Request;

class CondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('condidat.signupcon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('CV')) {
            $file = $request->CV;
            $CV = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/CV/'), $CV);
        }
        condidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
            'poste' => $request->poste,
            'dateN' => $request->dateN,
            'cni' => $request->cni,
            'email' => $request->email,
            'CV' => $CV,
        ]);
        return redirect()->route('login');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function show(condidat $condidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function edit(condidat $condidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, condidat $condidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(condidat $condidat)
    {
        //
    }
}
