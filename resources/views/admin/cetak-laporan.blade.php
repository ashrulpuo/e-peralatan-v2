@extends('master.master')

@section('content')

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

<div class="pace  pace-inactive">
	<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
		<div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div>
</div>
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
										<p align="right">AM 2.4 LAMPIRAN A <br>
											<b>KEW.PA-9</b>
										</p>
										<table align="right" border="0" id="table2">
											<tr>
												<th>No Permohonan:</th>
												<td>5</td>
											</tr>
										</table>
									</div>        
									<div class="panel-body">
										<p align="center" class="style3">BORANG PERMOHONAN PERGERAKAN/PINJAMAN ASET ALIH</p>
										<table id="table" width="100%">
											<tr>
												<th>Nama Pemohon:</th>
												<td></td>
												<th>Tujuan:</th>
												<td></td>
											</tr>
											<tr>
												<th>Jawatan:</th>
												<td></td>
												<th>Tempat Digunakan:</th>
												<td></td>
											</tr>
											<tr>
												<th>Bahagian:</th>
												<td></td>
												<th>Nama Pengeluar:</th>
												<td></td> <!-- Admin incharge-->
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
												<td align="center">Dipulang</td>
												<td align="center">Dipulang</td>
												<td align="center">Diterima</td>
											</tr>
											<tr>
												<td>1.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>

											</tr>

											<tr>
												<td>2.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>

											</tr>
											<tr>
												<td> 3.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>

											</tr>
											<tr>
												<td> 4.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>

											</tr>
											<tr>
												<td> 5.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
											</tr>
											<tr>
												<td>6.</td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
												<td>  </td>
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
															<p>Nama:<br>
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
				@endsection