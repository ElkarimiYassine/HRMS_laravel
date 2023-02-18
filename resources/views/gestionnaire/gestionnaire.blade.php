@extends('layouts.master')
@section('title')
GRHMS | Gestionnaire
@endsection
@section('css')
<style>
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
			<div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
						<img src="{{ asset('./uploads/profiles/' . auth()->user()->profile) }}"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;height:150px;" >
                        <h5 class="my-3">{{  auth()->user()->name }}</h5>
                        <p class="text-muted mb-1">{{  auth()->user()->email }}</p>
                        <p class="text-muted mb-4">{{ $poste->poste }}</p>
                        <div class="d-flex justify-content-center mb-2">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nom et prenom</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Telephone</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->tel }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Ville</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->ville }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nationalite</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->nationalite }}</p>
                            </div>
                        </div>
						 <hr>
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Poste</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $poste->poste }}</p>
                            </div>
                        </div>
						 <hr>
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Salaire de base</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $poste->salaire_de_base }}</p>
                            </div>
                        </div>
						 <hr>
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date naissance</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->dateN }}</p>
                            </div>
                        </div>
						 <hr>	
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date de debut du contrat</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->datecert_deb }}	</p>
                            </div>
                        </div>
						 <hr>
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Adresse</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{  auth()->user()->adresse }}</p>
                            </div>
                        </div>
						 <hr>
						<div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Matricule</h6>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">#{{ auth()->user()->matricule }}</p>
                            </div>
                        </div>		
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
@endsection