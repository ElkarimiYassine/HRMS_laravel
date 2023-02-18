@extends('layouts.master')
@section('title')
GRHMS | Congés
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
									<h4 class="content-title mb-0 my-auto">Les demandes de congés</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="example1">
										<thead>
											<tr>
												<th class="border-bottom-0">matricule</th>
												<th class="border-bottom-0">Nom d'employee</th>
												<th class="border-bottom-0">Poste d'employee</th>
												<th class="border-bottom-0">Date de début de congé</th>
                                                <th class="border-bottom-0">Date de début de fin</th>
                                                <th class="border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($conges as $c)
											 <tr>
												@foreach ($user as $u)
												<td>{{ $u->matricule }}</td>
												@if ($u->id == $c->id_user)
												<td>{{ $u->name }}</td>
												@foreach ($poste as $p)
												@if($p->id_poste == $u->id_poste)
												<td>{{ $p->poste }}</td>
												@endif
												@endforeach										
												@break
												@endif
												@endforeach
												<td>{{ $c->dateD }}</td>
												<td>{{ $c->dateF }}</td>
												<td>
                                            	<div class="d-flex justify-content-center align-content-center">
                                                <a href="{{ url('DemCon/accept') }}/{{ $c->id_cong }}" type="button"
                                                    class="btn btn-sm btn-success ml-1">
                                                    <i class="fa-solid fa-check"></i>
                                                </a>
												<a href="{{ url('DemCon/refuse') }}/{{ $c->id_cong }}" type="button"
                                                    class="btn btn-sm btn-danger ml-1">
                                                    <i class="fas fa-xmark"></i>
                                                </a>
                                                
												</td>
											
											</tr>
											@endforeach
										</tbody>
									</table>
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