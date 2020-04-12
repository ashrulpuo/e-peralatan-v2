@extends('master.master-admin')

@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Tukar Peralatan<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
		<div class="heading-elements">

		</div>
	</div>

	<div class="panel-body">


		<form action="{{ route('pulang.update', $data['id'])}}" method="POST" class="form-horizontal" role="form" id="admin_prosesPermohonan" method="post" accept-charset="utf-8">          
			@csrf
			@method('PUT')
			<div class="form-group">
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Nama Pemulang</label>
				<div class="col-sm-4">
					<input type="text" name="nama_pemulang" value="" id="nama" class="form-control" placeholder="Nama Pemulang" required>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Peralatan:</label>
				<div class="col-sm-6">
					@foreach($data['peralatan'] as $key => $data)
					<div class="checkbox">
						<label><input type="checkbox" name="peralatan[]" value="{{ $data['detail_peralatan']['id']}}" /> {{ $data['detail_peralatan']['model']}}</label>
					</div>
					@endforeach
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12" style="text-align: center">

					<button type="submit" id="sah" value="true" class="btn btn-primary">Sahkan Pemulangan</button>
					<a href="{{ route('senarai.index') }}"><button name="Kembali" type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>

				</div>
			</div>

		</form>               
	</div>
</div> 
@endsection