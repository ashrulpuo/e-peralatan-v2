@extends('master.master-admin')

@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Pemulangan Peralatan<a class="heading-elements-toggle"></a><a class="heading-elements-toggle"></a></h5>
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
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Jawatan</label>
				<div class="col-sm-4">
					<input type="text" name="jawatan_pemulang" value="" id="nama" class="form-control" placeholder="Jawatan" required>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Peralatan:</label>
				<div class="col-sm-6">
					@foreach($data['peralatan'] as $key => $data)
					<div class="checkbox">
						<label><input type="checkbox" name="peralatan[]" value="{{ $data['detail_peralatan']['id']}}" /> {{ $data['detail_peralatan']['no_asset']}}</label>
					</div>
					@endforeach
				</div>
			</div>

			<h5>
				Maklumat Penerima
			</h5>
			<div class="form-group">
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Nama</label>
				<div class="col-sm-4">
				  <input type="text" name="nama_penerima" value="" id="nama" class="form-control" placeholder="Nama Penerima" required>
				</div>
			  </div>
			  <br>
			  <div class="form-group">
				<label class="col-sm-3 control-label"><span style="color:red">* </span>Jawatan</label>
				<div class="col-sm-4">
					<input type="text" name="jawatan_penerima" value="" id="nama" class="form-control" placeholder="Jawatan Penerima" required>
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