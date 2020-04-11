@extends('master.master')

@section('content')
<div class="page-container" style="min-height:646px">
	<div class="page-content">
		<div class="content-wrapper">
			<div class="row">
				<div class="wrapper-page-spp">
					<div class="panel panel-flat">
						<a href="/"><img src="assets/img/official.jpg" width="980" height="180"></a>
						<div style="padding:20px 20px 0">
						@if(!empty($status))
							@if($status != 1)
							<div class="col-md-12">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<h4><i class="icon fa fa-check"></i> Status permohonan : Berjaya</h4>
											Sila ambil peralatan anda.
										</div>
									</div>
									<!-- /.box-body -->
								</div>
							</div>
							@else
							<div class="col-md-12">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<h4><i class="icon fa fa-check"></i> Status permohonan : Tidak berjaya</h4>
											Status permohonan anda belum disahkan, sila simpan no permohonan untuk tujuan semakan.
										</div>
									</div>
									<!-- /.box-body -->
								</div>
							</div>
							@endif
						@else
							<div class="col-md-12">
								<div class="box box-default">
									<!-- /.box-header -->
									<div class="box-body">
										<div class="alert alert-success alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<h4><i class="icon fa fa-check"></i>No permohonan anda salah</h4>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
							</div>
						@endif
							<div class="row">
								<div class="col-md-12">
									<!-- START CONTENT -->
									<div class="panel panel-flat">
										<div class="panel-heading">
											<h5 class="panel-title">Semakan Permohonan<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
											<div class="heading-elements">
											</div>
										</div>
										<div class="panel-body">
											<form action="{{ route('semakan.search') }}" class="form-horizontal" role="form" id="kpj_pelawat" method="post" accept-charset="utf-8">
												@csrf
												<div class="form-group">
													<label class="col-sm-3 control-label"><span style="color:red">* </span>No Permohonan</label>
													<div class="col-sm-4">
														<input type="text" name="id_pemohonan" value="" id="no_permohonan" class="form-control" placeholder="No Permohonan" required>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12" style="text-align: center">
														<button type="submit" id="Semakan" value="true" class="btn btn-success waves-effect waves-light">Semakan</button>
														<a href="/"><button name="Batal" type="button" id="Batal" value="true" class="btn btn-warning">Batal</button></a>
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