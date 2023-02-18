<?php

namespace App\Http\Controllers;

use App\Models\conges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CongesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.DemandeCon');
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
        //
        $this->validate($request, [
            'dateD'           => 'required',
            'dateF'           => 'required',
            
        ]);
        conges::create([
            'id_user'        =>(Auth::user()->id),
            'dateD'          =>date('Y-m-d H:i:s', strtotime($request->dateD)),
            'dateF'          =>date('Y-m-d H:i:s', strtotime($request->dateF)),
            'statut'         => '0',
          
        ]);
        return redirect('home') ;
    }
    public function demande()
    {
        //
        $conges = conges::all();
        return view('employee.MesDemandesCon',compact('conges'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function show(conges $conges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$state)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conges $conges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conges  $conges
     * @return \Illuminate\Http\Response
     */
    public function destroy(conges $conges)
    {
        //
    }
}
