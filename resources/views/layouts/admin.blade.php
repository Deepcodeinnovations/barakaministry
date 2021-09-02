<!DOCTYPE html>
<html lang="en">

<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Content by Deepcode Innovations">
		<meta name="author" content="Deepcode Innovations Limted">
		<meta name="keywords" content="">
		<script src="{{ asset('/adminassets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Favicon -->
		<link rel="icon" href="/adminassets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Ricky Joby Contractors : Manage Website</title>

		<!-- Bootstrap css-->
		<link href="{{ asset('/adminassets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
		<link href="{{ asset('/adminassets/css/icons.css')}}" rel="stylesheet"/>
		<link href="{{ asset('/adminassets/css/style.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/css/dark-boxed.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/css/boxed.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/css/skins.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/css/dark-style.css')}}" rel="stylesheet">
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('/adminassets/css/colors/color.css')}}">
		<link href="{{ asset('/adminassets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('/adminassets/plugins/summernote/summernote-bs4.css')}}">
		<link href="{{ asset('/adminassets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('/adminassets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('/adminassets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('/adminassets/css/sidemenu/sidemenu.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link href="{{ asset('/adminassets/switcher/demo.css')}}" rel="stylesheet">

	</head>

	<body class="main-body leftmenu">

		<!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg_dark">
					<i class="fa fa-cog fa-spin  text_primary"></i>
				</div>
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
					
						
							<div class="swichermainleft">
								<h4>Ions Styles</h4>
								<div class="switch_section my-2">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Theme Style</span>
										<div class="onoffswitch2">
											<input type="checkbox" name="onoffswitch2" id="myonoffswitch52" class="onoffswitch2-checkbox">
											<label for="myonoffswitch52" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
								<div class="switch_section my-2">
									<div class="switch-toggle d-flex">
										<span class="mr-auto">Boxed Style</span>
										<div class="onoffswitch2">
											<input type="checkbox" name="onoffswitch2" id="myonoffswitch53" class="onoffswitch2-checkbox">
											<label for="myonoffswitch53" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Theme Layout</h4>
								<div class="switch_section d-flex my-4">
									<div class="d-block text-center mx-auto">
										<button type="button" id="background5" class="bg5 mb-3 wscolorcode1 blackborder"></button>
										<span class="badge badge-light tx-12">Dark layout</span>
									</div>
									<div class="d-block text-center mx-auto">
										<button type="button" id="background6" class="bg6 mb-3 wscolorcode1 blackborder"></button>
										<span class="badge badge-light tx-12">Light layout</span>
									</div>
								</div>
							</div>
					
							<div class="swichermainleft">
								<h4>Leftmenu Styles Mode</h4>
								<div class="switch_section d-flex my-4">
									<div class="d-block text-center mx-auto">
										<button type="button" id="background1" class="bg1 wscolorcode1 blackborder"></button>
										<span class="badge badge-light tx-12">Color Menu</span>
									</div>
									<div class="d-block text-center mx-auto">
										<button type="button" id="background2" class="bg2 wscolorcode1 blackborder"></button>
										<span class="badge badge-light tx-12">Light Menu</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('/adminassets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->


		<!-- Page -->
		<div class="page">

	    @include('admin.includes.header')

			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">

					@include('admin.includes.bread')
					@yield('content')
				</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Main Footer-->
		@include('admin.includes.footer')
			<!--End Footer-->


		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->

		<script src="{{ asset('/adminassets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/peity/jquery.peity.min.js')}}"></script>
		<script src="{{ asset('/adminassets/js/apexcharts.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{ asset('/adminassets/js/table-data.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/summernote/dist/summernote.min.js')}}"></script>
		<script src="{{ asset('/adminassets/js/summernote-data.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{ asset('/adminassets/js/select2.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/sidemenu/sidemenu.js')}}"></script>
		<script src="{{ asset('/adminassets/plugins/sidebar/sidebar.js')}}"></script>
		<script src="{{ asset('/adminassets/js/form-editor.js')}}"></script>
		<script src="{{ asset('/adminassets/js/index.js')}}"></script>
		<script src="{{ asset('/adminassets/js/sticky.js')}}"></script>
		<script src="{{ asset('/adminassets/js/custom.js')}}"></script>
		<script src="{{ asset('/adminassets/switcher/js/switcher.js')}}"></script>


	</body>

</html>