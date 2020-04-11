@extends('master.master')

@section('content')

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

<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
	<div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div>
</div>
<div class="page-container" style="min-height:646px">
	<div class="page-content">
		<div class="content-wrapper">
			<div class="row">
				<div class="wrapper-page-spp">
					<div class="panel panel-flat">
						<a href="index.html"><img src="assets/img/official.jpg" width="980" height="180"></a>
						<div style="padding:20px 20px 0">
							<div class="row">
								<div class="col-md-12">
									<div class="topnav">
										<a href="admin_index.html">Permohonan Baru</a>
										<a href="admin_senaraiPermohonan.html">Senarai Permohonan</a>
										<a class="active" href="laporan.html">Laporan</a>
										<a href="#keluar">Keluar</a>
									</div>
									<div class="panel-body">
										<h4> Laporan SPHM </h4>
										<div class="panel-body">
											<table id="table" width="100%">
												<tr>
													<th rowspan="2" align="center">Bil</th>
													<th rowspan="2" align="center">Peminjam</th>
													<th rowspan="2" align="center">Pemulang</th> 
													<th colspan="2" align="center">Tarikh</th>
													<th rowspan="2">Tindakan</th>
												</tr>
												<tr>
													<td>Pinjam </td>
													<td>Pulang</td>
												</tr>
												<tr>
													<td>1.</td>
													<td> <!-- Nama peminjam --></td>
													<td> <!-- Nama pemulang --></td>
													<td> <!-- Tarikh pinjam --></td>
													<td> <!-- Traikh Pemulang --></td>
													<td> <a href="cetak_laporan.html"><button name="cetak" type="button" id="pulang" value="true" class="btn btn-primary">Cetak </button></a></td>
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
</div>
@endsection