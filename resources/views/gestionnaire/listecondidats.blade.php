@extends('layouts.master')
@section('title')
GRHMS | Condidats
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
				<!-- row -->
				<div class="row">
                    					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="content-title mb-0 my-auto">Liste des condidats</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
								  <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                        style="text-align: center">
										<thead>
											<tr>
												<th class="border-bottom-0">ID</th>
												<th class="border-bottom-0">Nom</th>
												<th class="border-bottom-0">Prenom</th>
												<th class="border-bottom-0">Tel</th>
												<th class="border-bottom-0">poste</th>
												<th class="border-bottom-0">Date de naissance</th>
												<th class="border-bottom-0">CNI</th>
												<th class="border-bottom-0">Email</th>
												<th class="border-bottom-0">CV</th>
												<th class="border-bottom-0">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0; ?>
											@foreach ($condidat as $c)
											 <?php $i++; ?>
											 <tr>
												<td>{{ $i }}</td>
												<td>{{ $c->nom}}</td>
												<td>{{ $c->prenom }}</td>
												<td>{{ $c->tel }}</td>
												<td>{{ $c->poste}}</td>
												<td>{{ $c->dateN }}</td>
												<td>{{ $c->cni }}</td>
												<td>{{ $c->email }}</td>
												<td>
												<a href="{{ asset('./uploads/Cv/' . $c->CV) }}">{{ $c->CV }}</a>
												 </td>
                                                <td>
													<form id="del" action="{{ url('/ListeCondidats') }}/{{ $c->id_con }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="deleteT()" type="submit" class="btn btn-sm btn-danger ml-1">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                	</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
    </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
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