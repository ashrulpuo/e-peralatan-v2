@extends('master.master')

@section('content')
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
									<div class="panel-body">
										<h4> Maklumat Pemohon</h4>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<th scope="row">No. Permohonan</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Nama</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Jawatan</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Daerah / Bahagian</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Tujuan</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Tempat Digunakan</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Tarikh Pinjam</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Tarikh Pulang</th>
													<td> </td>
												</tr>
												<tr>
													<th scope="row">Status</th>
													<td> </td>
												</tr>
											</tbody>
										</table>
										<br>
										<h4>
											Maklumat Peralatan
										</h4>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<th scope="row">Peralatan 1</th>
													<td>
													</td>
												</tr>
												<tr>
													<th scope="row">Peralatan 2</th>
													<td>
													</td>
												</tr>
												<tr>
													<th scope="row">Peralatan 3</th>
													<td>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
										<div class="form-group">
											<div class="col-sm-12" style="text-align: right;">
												<a href="semakanPermohonan.html"> <button name="Kembali" type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>
												<a href="cetak_permohonan.html"> <button name="Kembali" type="button" id="Kembali" value="true" class="btn btn-primary">Cetak</button></a>
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
</div>
@endsection