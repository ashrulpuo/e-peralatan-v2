<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Sistem Pergerakan Harta Modal ICT JPS Selangor | SPHM</title>
	<!-- Default CSS Header -->
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/spp.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheets">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<!-- /global stylesheets -->
	<!-- Default JS Header -->
	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/blockui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/nicescroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/drilldown.js') }}"></script>
	<!-- /core JS files -->
	<script type="application/javascript">
		function cbox(url,msg){if(confirm(msg)){window.location = url;}}   
	</script>
	<script type="text/javascript" src="{{ asset('assets/js/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/sweet_alert.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	@stack('custom-scripts')
</head>
<body class="login-container login-cover">
	<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
		<div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div></div>
	<div class="page-container" style="min-height:646px">
		<div class="page-content">
			<div class="content-wrapper">
				<div class="row">
					<div class="wrapper-page-spp">
						<div class="panel panel-flat">
							<a href="index.html"><img src="{{ asset('assets/img/official.jpg') }}" width="980" height="180"></a>
							<div style="padding:20px 20px 0">
								<div class="row">
									<div class="col-md-12">
										<div class="topnav">
											<a class="active" href="{{ route('home.index') }}">Permohonan Baru</a>
											<a href="{{ route('senarai.index') }}">Senarai Permohonan</a>
											<a href="{{ route('laporan.index') }}">Laporan</a>
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
									@yield('content')
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer text-footer text-center">
	<p>Bahagian Pengurusan Maklumat (BICT)<br/>
		Jabatan Pengairan Dan Saliran Negeri Selangor<br />
		Tingkat 5 Blok Podium Selatan Bangunan SSAAS<br />
	40503 Shah Alam</p>
	<p>Copyright Reserved © 2020 Bahagian Pengurusan Maklumat (BICT)<br>
	</div>
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
			overflow: hidden;
			background-color:  #a6a6a6;
		}

		.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.topnav a.active {
			background-color: #80bfff;
			color: white;
		}
		table, td, th {
			border: 1px solid black;

		}

		#table {
			border-collapse: collapse;
		}
	</style>
</body>
</html>
