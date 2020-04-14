<!DOCTYPE html>
<html lang="en">
<style>
	table, td, th {
		border: 1px solid black;
	}
	#table {
		border-collapse: collapse;
	}
	#table2 {
		border:0;
	}
</style>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Semakan Permohonan</title>
	<!-- Default CSS Header -->
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css"> 
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheets">
	<script type="text/javascript" src="{{ asset('assets/js/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/blockui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/nicescroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/drilldown.js') }}"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="application/javascript">
		function cbox(url,msg){if(confirm(msg)){window.location = url;}}   
	</script>
	<script type="text/javascript" src="{{ asset('assets/js/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/sweet_alert.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
</head>
<body class="login-container login-cover  pace-done sidebar-xs-indicator" data-gr-c-s-loaded="true"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
	<div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<div class="page-container" style="min-height:646px">
	<div class="page-content">
		<div class="content-wrapper">
			<div class="row">
				<div class="wrapper-page-spp">
					<div style="padding:20px 20px 0">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<table align="right" border="0" id="table2">
											<tr>
												<p align="right"> AM 2.4 Lampiran A <br> <b>KEW.PA-9</b></p>
												<th>No Permohonan:</th>
												<td>{{ $data['id_permohonan'] }}</td>
											</tr>
										</table>
									</div>
									<div class="panel-body">
										<p align="center" class="style3">BORANG PERMOHONAN PERGERAKAN/PINJAMAN ASET ALIH</p>
										<table id="table" width="100%">
											<tr>
												<th>Nama Pemohon:</th>
												<td>{{ $data['nama'] }}</td>
												<th>Tujuan:</th>
												<td>{{ $data['tujuan'] }}</td>
											</tr>
											<tr>
												<th>Jawatan:</th>
												<td>{{ $data['jawatan'] }}</td>
												<th>Tempat Digunakan:</th>
												<td>{{ $data['tempat_digunakan'] }}</td>
											</tr>
											<tr>
												<th>Bahagian:</th>
												<td>{{ $data['bahagian'] }}</td>
												<th>Nama Pengeluar:</th>
												<td>En Khoir</td> <!-- Admin incharge-->
											</tr>
										</table>
										<br>
										<table id="table" width="100%">
											<tr>
												<th rowspan="2" align="center">Bil:</th>
												<th rowspan="2" align="center">No Siri Pendaftran:</th>
												<th rowspan="2" align="center">Keterangan Asset:</th>  
												<th colspan="2" align="center">Tarikh:</th>  
												<th rowspan="2" align="center">Lulus/ Tidak lulus:</th>
												<th colspan="2" align="center">Tarikh:</th>
												<th rowspan="2" align="center">Catatan:</th>
											</tr>

											<tr>
												<td align="center">Dipinjam</td>
												<td align="center">Dijangka pulang</td>
												<td align="center">Dipulang</td>
												<td align="center">Diterima</td>
											</tr>
											<tr>
												@foreach($data['peralatan'] as $key => $item)
												<tr>
													<td>{{ $key + 1 }}</td>
													<td>{{ $item['detail_peralatan']['no_asset']}}  </td>
													<td> {{ $item['detail_peralatan']['model']}} </td>
													<td> {{ $item['tarikh_pinjam']}} </td>
													<td>{{ $item['tarikh_pulang']}}  </td>
													<td>  
														@if($data['status_permohonan'] == 1)
														Permohonan Baru
														@elseif($data['status_permohonan'] == 2)
														Telah Diluluskan
														@elseif($data['status_permohonan'] == 3)
														Permohonan Ditolak
														@else($data['status_permohonan'] == 4)
														Telah Diluluskan
														@endif
													</td>
													<td> {{ date('d-m-y', strtotime($item['updated_at'])) }} </td>
													<td> {{ date('d-m-y', strtotime($item['updated_at'])) }} </td>
													<td> 
														@if($data['status_permohonan'] == 4)
														peralatan dihantar
														@endif
													</td>
												</tr>
												@endforeach
										</tr>
										<tr>
											<td colspan="4">
												<p>&nbsp;&nbsp;</p>
												<p>.....................................
													<br>(Tandatangan Peminjam)</p>
													<p>Nama:<br>
														Jawatan:<br>
													Tarikh:</p>
												</td>
												<td colspan="5">
													<p>&nbsp;&nbsp;</p>
													<p>.....................................
														<br>(Tandatangan Pelulus)</p>
														<p>Nama: En Khoir<br>
															Jawatan:<br>
														Tarikh:</p>
													</td>
												</tr>
												<tr>
													<td colspan="4">
														<p>&nbsp;&nbsp;</p>
														<p>.....................................
															<br>(Tandatangan Pemulang)</p>
															<p>Nama:<br>
																Jawatan:<br>
															Tarikh:</p>
														</td>
														<td colspan="5"> 
															<p>&nbsp;&nbsp;</p>
															<p>.....................................
																<br>(Tandatangan Penerima)</p>
																<p>Nama:<br>
																	Jawatan:<br>
																Tarikh:</p>
															</td>
														</tr>
													</table>
												</div>
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
			</body>
			</html>
