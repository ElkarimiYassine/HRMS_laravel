<?php

namespace App\Http\Controllers;

use App\Models\dem_doc;
use App\Models\document;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document as BlockDocument;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('gestionnaire.ajouterdoc');
    }
    public function ListeDem()
    {
        //
        $demande = dem_doc::where('id_user','=',auth()->user()->id)->get();
        $document = document::all();
        return view('employee.MesDemanedesDoc',compact('document','demande'));
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
        if ($request->has('file')) {
            $file = $request->file;
            $doc = $file->getClientOriginalName();
            $file->move(public_path('uploads/Docs'), $doc);
        }
        document::create([
            'nom_doc' => $request->nom_doc,
            'type' => $request->type,
            'file' => $doc,
        ]);
        return redirect('/ListeDoc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(document $document)
    {
        //
        $document = document::all();
        return view('gestionnaire.listeDoc', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(document $document,$id_doc)
    {
        //
        $document = document::where('id_doc', $id_doc)->first();
        $document->delete();
        return redirect('/ListeDoc');
    }
}
