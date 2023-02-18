<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\poste;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $poste = poste::where('id_poste',auth()->user()->id_poste)->first();
        return view('employee.home',compact('poste'));
    }
}
