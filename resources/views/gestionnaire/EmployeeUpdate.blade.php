@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">update</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
						</div>
					</div>
				</div>
					
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
								<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Modifiez l' employee
								</div>
								<br>
								<div class="pd-30 pd-sm-40 bg-gray-200">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Nom et prenom </label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('name', $user->name) }}" class="form-control" placeholder="Enter your firstname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Email</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('email',$user->email ) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
                                    <div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Code postal</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('$code_postal', $user->code_postal) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
                                    <div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Ville</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('ville', $user->ville) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
                                    <div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Tel</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('tel', $user->tel) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
                                    <div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Nationalite</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('nationalite', $user->nationalite) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
                                    <div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Num social</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input value="{{ old('num_social', $user->num_social) }}" class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group ">
											<div class="col-md-4">
												<label style="position: relative;right: 12px;" class="form-label mg-b-0">Date de naissance</label>
											</div>
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
											</div><input {{old('dateN', $user->dateN) }} class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-group ">
											<div class="col-md-4">
												<label style="position: relative;right: 12px;" class="form-label mg-b-0">Date de debut du contrat</label>
											</div>
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
											</div><input {{ old('datecert_deb', $user->datecert_deb) }} class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Adresse</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input  {{ old('adresse', $user->adresse) }} class="form-control" placeholder="Adresse" type="text">
										</div>
									</div>
									<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
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
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection