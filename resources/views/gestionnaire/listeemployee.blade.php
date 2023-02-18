@extends('layouts.master')
@section('title')
GRHMS | Employees
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
									<h4 class="content-title mb-0 my-auto">Liste des employees</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
								  <table id="example1" class="table table-hover key-buttons text-md-nowrap" data-page-length='50'
                        style="text-align: center">
										<thead>
											<tr>
												<th class="border-bottom-0">Matricule</th>
												<th class="border-bottom-0">Nom</th>
                                                <th class="border-bottom-0">Email</th>
                                                <th class="border-bottom-0">poste</th>
                                                <th class="border-bottom-0">Salair de base</th>
                                                <th class="border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($user as $u)										 
											 <tr>
												<td>#{{ $u->matricule }}</td>
												<td>{{ $u->name}}</td>
                                                <td>{{ $u->email}}</td>
												@foreach ($poste as $p)
													@if ($p->id_poste == $u->id_poste)
														<td>{{ $p->poste}}</td>
														<td>{{ $p->salaire_de_base}}</td>
													@endif
												@endforeach
                                                 <td>
													
                                            <div class="d-flex justify-content-center align-content-center">
                                                <a href="{{ url('EmployeeDetails') }}/{{ $u->id }}" type="button"
                                                    class="btn btn-sm btn-primary ml-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <form id="del" action="{{ url('EmployeeDelete') }}/{{ $u->id }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="deleteT()" type="submit" class="btn btn-sm btn-danger ml-1">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
												</td>
                                                </form>
												

                                            </div>
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