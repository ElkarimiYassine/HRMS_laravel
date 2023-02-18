<?php

namespace App\Http\Controllers;

use App\Models\condidat;
use App\Models\poste;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\conges;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreateAccount;
use App\Models\dem_doc;
use App\Models\document;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class GestionnaireController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function listedem()
    {
        $data = dem_doc::where('statut','=', 0)->join('users as us','us.id','=', 'dem_docs.id_user')
                    ->join('documents as dem','dem.id_doc','=', 'dem_docs.id_doc')
                    ->get(['us.matricule','us.name', 'dem.nom_doc', 'dem.type','dem.id_doc','dem.file']);                             
        return view('gestionnaire.ListeDem',compact('data'));
    }
    public function conges()
    {
        $user = user::join('conges','id','=','conges.id_user')->orderBy('id')->get();
        $conges = conges::where('conges.statut', '=', '0')->orderBy('id_user')->get();
        $poste = poste::all();
        return view('gestionnaire.DemandesCon',compact('conges','user','poste'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $poste = poste::where('id_poste', auth()->user()->id_poste)->first();
        return view('gestionnaire.gestionnaire' ,compact('poste'));
    }

    public function Condidats()
    {
        $condidat = condidat::all();
        return view('gestionnaire.listecondidats',compact('condidat'));
    }

    public function Employee()
    {
        $user = User::where('id','!=',1)->get();
        $poste = poste::all();
        return view('gestionnaire.listeemployee', compact('user','poste'));
    }

    public function afficher($id)
    {
        $user = user::where('id', $id)->first();
        $poste = poste::where('id_poste',$user->id_poste)->first();
        return view('gestionnaire.EmployeeDetails', compact('user','poste'));
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
        $test = user::where('email','=',$request->email)->get();
        if($test != NULL){
            return Redirect::back()->withErrors(['email deja existe', 'email doit etre unique']);;
        }
        if ($request->has('profile')) {
            $file = $request->profile;
            $profile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/CV'), $profile);
        }
        $this->validate($request, [
            'name'            => 'required',
            'email'           => 'required',
            'ville'           => 'required',
            'tel'             => 'required',
            'nationalite'     => 'required',
            'id_poste'        => 'required',
            'dateN'           => 'required',
            'datecert_deb'    => 'required',
            'adresse'         => 'required',
        ]);
        $passwd = str::random(10);
        User::create([
            'name'           =>$request->name,
            'email'          =>$request->email,
            'ville'          =>$request->ville,
            'tel'            =>$request->tel,
            'nationalite'    =>$request->nationalite,
            'id_poste'       =>$request->id_poste,
            'dateN'          =>$request->dateN,
            'datecert_deb'   =>$request->datecert_deb,      
            'id_role'        =>2,
            'adresse'        => $request->adresse,
            'profile'        => $profile,
            'matricule'      => random_int(10000, 99999),
            'password'       =>Hash::make($passwd),
            'salaire_de_base'=>$request->salaire,
        
        ]);
        $this->sendEmail($request->email,$passwd);

        return redirect('/ListeEmployees');
    }
    public function sendEmail($email,$passwd)
    {
        $data=[
            'email'    =>$email,
            'password' =>$passwd
        ];
        Mail::to($email)->send(new CreateAccount($data));
       
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $user = user::where('id', $id)->first();
        return view('gestionnaire.EmployeeUpdate',compact('user'));
    }
    public function accept(Request $request)
    {
        $state = '1';
        $conges = conges::where('id_cong','=',$request->id)->update(['statut'=>$state]);
        return redirect('/DemCon');
    }
    public function refuse(Request $request)
    {
        $state = '-1';
        $conges = conges::where('id_cong', '=', $request->id)->update(['statut' => $state]);
        return redirect('/DemCon');
    }
    public function refuseDoc(Request $request)
    {
        $state = '-1';
        $dem = dem_doc::where('id_doc', '=', $request->id)->update(['statut' => $state]);
        return redirect('/ListeDem');
    }
    public function acceptDoc(Request $request)
    {
        $state = '1';
        $dem = dem_doc::where('id_doc', '=', $request->id)->update(['statut' => $state]);
        return redirect('/ListeDem');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEmployee(Request $request, $id)
    {
        $user = user::where('id', $id)->first();
        $user->delete();
        return redirect('ListeEmployees');
    }

    public function AjouterEmployer()
    {
        $poste = poste::all();
        return view('gestionnaire.AjouterEmployee', compact('poste'));
    }

    public function destroy(Request $request,$id_con)
    {
        $condidat = condidat::where('id_con', $id_con)->first();
        $condidat->delete();
        return redirect('ListeCondidats');
    }
}
