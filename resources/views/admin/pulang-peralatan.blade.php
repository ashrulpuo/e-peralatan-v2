@extends('master.master')

@section('content')
<div class="pace-progress-inner"></div>
<div class="pace-activity"></div>
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
									<div class="panel panel-flat">
										<div class="panel-heading">
											<h5 class="panel-title">Tukar Peralatan<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
											<div class="heading-elements">

											</div>
										</div>

										<div class="panel-body">


											<form action="laporan.html" class="form-horizontal" role="form" id="admin_prosesPermohonan" method="post" accept-charset="utf-8">          

												<div class="form-group">
													<label class="col-sm-3 control-label"><span style="color:red">* </span>Nama Pemulang</label>
													<div class="col-sm-4">
														<input type="text" name="namaPemulang" value="" id="nama" class="form-control" placeholder="Nama Pemulang" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label"><span style="color:red">* </span>Peralatan:</label>
													<div class="col-sm-6">
														<input type="checkbox" name="peralatan1" value="">
														<label for="peralatan1"> <!-- Peralatan yang dipinjam --></label><br>
														<input type="checkbox" name="peralatan2" value="">
														<label for="peralatan2"> <!-- Peralatan yang dipinjam --></label><br>
														<input type="checkbox" name="peralatan2" value="">
														<label for="peralatan3"> <!-- Peralatan yang dipinjam --></label><br><br>

													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-12" style="text-align: center">

														<button name="sah" type="submit" id="sah" value="true" class="btn btn-primary">Sahkan Pemulangan</button>
														<a href="admin_index.html"><button name="Kembali" type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>

													</div>
												</div>

											</form>               
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