@extends('layouts.master')
@section('title')
GRHMS | {{ auth()->user()->name }}
@endsection
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
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
						<img src="{{ asset('./uploads/profiles/'.auth()->user()->profile) }}"
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
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
