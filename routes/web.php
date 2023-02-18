<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
//Auth::routes(['register' => false]);
Auth::routes();
Route::resource('signupcon', 'CondidatController');

/*--Gestionnaire-- */
Route::get('/gestionnaire', [App\Http\Controllers\GestionnaireController::class, 'index'])->middleware('gestionnaire')->name('gestionnaire');

/*****Docs*****/
Route::resource('AjouterDoc', 'DocumentController')->middleware('gestionnaire');
Route::get('/ListeDoc', [App\Http\Controllers\DocumentController::class, 'show'])->middleware('gestionnaire')->name('Documents');
Route::delete('/DocDelete/{id}', 'DocumentController@destroy')->middleware('gestionnaire');
/*****Docs*****/

/*****Employee*****/
Route::resource('ListeEmployees', 'GestionnaireController')->middleware('gestionnaire');
Route::get('/ListeEmployees', 'GestionnaireController@Employee')->middleware('gestionnaire');
Route::get('/EmployeeDetails/{id}', 'GestionnaireController@afficher')->middleware('gestionnaire');
Route::get('/ListeDem', [App\Http\Controllers\GestionnaireController::class, 'listedem'])->middleware('gestionnaire');
Route::get('/DemCon', [App\Http\Controllers\GestionnaireController::class, 'conges'])->middleware('gestionnaire');
Route::get('/AjouterEmployer', 'GestionnaireController@AjouterEmployer')->middleware('gestionnaire');
Route::post('/AjouterEmployer', 'GestionnaireController@store')->middleware('gestionnaire');
Route::get('/AjouterEmployer/mail/{id}', [App\Http\Controllers\GestionnaireController::class, 'sendEmail'])->middleware('gestionnaire');
Route::get('/DemCon/accept/{id}', [App\Http\Controllers\GestionnaireController::class, 'accept'])->middleware('gestionnaire');
Route::get('/DemCon/refuse/{id}', [App\Http\Controllers\GestionnaireController::class, 'refuse'])->middleware('gestionnaire');
Route::get('/ListeDem/refuse/{id}', [App\Http\Controllers\GestionnaireController::class, 'refuseDoc'])->middleware('gestionnaire');
Route::get('/ListeDem/accept/{id}', [App\Http\Controllers\GestionnaireController::class, 'acceptDoc'])->middleware('gestionnaire');
Route::delete('/EmployeeDelete/{id}', 'GestionnaireController@destroyEmployee')->middleware('gestionnaire');
/*****Employee*****/

/*****Condidat*****/
Route::get('/ListeCondidats', [App\Http\Controllers\GestionnaireController::class, 'Condidats'])->middleware('gestionnaire')->name('Condidats');
Route::delete('/ListeCondidats/{id}', 'GestionnaireController@destroy')->middleware('gestionnaire');
/*****Condidat*****/

/*-- Employee -- */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('employee');
Route::get('/DemandeConge', [App\Http\Controllers\CongesController::class, 'index'])->middleware('employee');
Route::get('/DemandeDoc', [App\Http\Controllers\DemandesController::class, 'index'])->middleware('employee');
Route::get('/Mes_demandes_docs', [App\Http\Controllers\DocumentController::class, 'ListeDem'])->middleware('employee');
Route::get('/Mes_demandes_conge', [App\Http\Controllers\CongesController::class, 'demande'])->middleware('employee');
Route::post('/DemandeConge', [App\Http\Controllers\CongesController::class, 'store'])->middleware('employee');
Route::get('/DemandeDoc/{id}', [App\Http\Controllers\DemandesController::class, 'store'])->middleware('employee');

