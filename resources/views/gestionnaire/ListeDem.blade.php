@extends('layouts.master')
@section('title')
GRHMS | Documents
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
									<h4 class="content-title mb-0 my-auto">Liste des demandes</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
								  <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'
                        style="text-align: center">
										<thead>
											<tr>
												<th class="border-bottom-0">Matricule</th>
												<th class="border-bottom-0">Nom d'employee</th>
												<th class="border-bottom-0">Nom du document</th>
                                                <th class="border-bottom-0">Type</th>
												<th class="border-bottom-0">Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $d)
											<tr>
												<td>#{{ $d->matricule }}</td>
											<td>{{ $d->name }}</td>
											<td>{{ $d->nom_doc }}</td>
											<td>{{ $d->type }}</td>
											<td>
												<div class="d-flex justify-content-center align-content-center">
                                                <a href="{{ url('/ListeDem/accept') }}/{{ $d->id_doc }}" type="button"
                                                    class="btn btn-sm btn-success ml-1">
                                                    <i class="fa-solid fa-check"></i>
                                                </a>
												<a href="{{ url('/ListeDem/refuse') }}/{{ $d->id_doc }}" type="button"
                                                    class="btn btn-sm btn-danger ml-1">
                                                    <i class="fas fa-xmark"></i>
                                                </a>
                                                <a type="button"
                                                    class="btn btn-sm btn-primary ml-1" onclick="printPdf('{{ asset('./uploads/Docs/' . $d->file) }}')">
                                                    <i class="fas fa-print"></i>
                                                </a>
												</div>
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
<script>
	function printPdf(pdf) {

    var iframe = document.createElement('iframe');
    iframe.style.display = "none";
    iframe.src = pdf;

    document.body.appendChild(iframe);
    iframe.contentWindow.focus();
    iframe.contentWindow.print();
}
</script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.css"></script>
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