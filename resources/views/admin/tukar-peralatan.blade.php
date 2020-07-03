@extends('master.master-admin')

@section('content')
<div class="col-md-12">
	<!-- START CONTENT -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Tukar Peralatan<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
			<div class="heading-elements">

			</div>
		</div>
		<div class="panel-body">
			<form action="{{ route('changeProcess', $id['id_permohonan']) }}" method="POST" class="form-horizontal" role="form" id="admin_prosesPermohonan" method="post" accept-charset="utf-8">          
				@csrf
				@if (!empty($pemohonItems[0][0]['detail_peralatan']['peralatan']))
				<div class="form-group">
					<label class="col-sm-2 control-label"><span style="color:red">* </span>Peralatan 1</label>
					<div class="row">
						<div class="col-xs-4">
							<input class="form-control" type="text" value="{{ $pemohonItems[0][0]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][0]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][0]['detail_peralatan']['no_asset'] }}" readonly>
							<input class="form-control" type="hidden" name="peralatan_satu[]" value="{{ $pemohonItems[0][0]['detail_peralatan']['id'] }}" placeholder="{{ $pemohonItems[0][0]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][0]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][0]['detail_peralatan']['no_asset'] }}" readonly>
						</div>
						<div class="col-xs-1">change</div>
						<div class="col-xs-4">
							<select name="peralatan_satu[]" id="peralatan_satu" class="form-control">
								@foreach($peralatan as $key => $item)
								<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
								@endforeach
							</select>
						</div>
					 </div>
				</div>
				@endif
				@if (!empty($pemohonItems[0][1]['detail_peralatan']['peralatan']))
				<div class="form-group">
					<label class="col-sm-2 control-label"><span style="color:red">* </span>Peralatan 1</label>
					<div class="row">
						<div class="col-xs-4">
							<input class="form-control" type="text" value="{{ $pemohonItems[0][1]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][1]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][1]['detail_peralatan']['no_asset'] }}" readonly>
							<input class="form-control" type="hidden" name="peralatan_dua[]" value="{{ $pemohonItems[0][1]['detail_peralatan']['id'] }}" placeholder="{{ $pemohonItems[0][1]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][1]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][1]['detail_peralatan']['no_asset'] }}" readonly>
						</div>
						<div class="col-xs-1">change</div>
						<div class="col-xs-4">
							<select name="peralatan_dua[]" id="peralatan_dua" class="form-control">
								@foreach($peralatan as $key => $item)
								<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
								@endforeach
							</select>
						</div>
					 </div>
				</div>
				@endif
				@if (!empty($pemohonItems[0][2]['detail_peralatan']['peralatan']))
				<div class="form-group">
					<label class="col-sm-2 control-label"><span style="color:red">* </span>Peralatan 3</label>
					<div class="row">
						<div class="col-xs-4">
							<input class="form-control" type="text" value="{{ $pemohonItems[0][2]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][2]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][2]['detail_peralatan']['no_asset'] }}" readonly>
							<input class="form-control" type="hidden" name="peralatan_tiga[]" value="{{ $pemohonItems[0][2]['detail_peralatan']['id'] }}" placeholder="{{ $pemohonItems[0][2]['detail_peralatan']['peralatan'] }} - {{ $pemohonItems[0][2]['detail_peralatan']['model'] }} - {{ $pemohonItems[0][2]['detail_peralatan']['no_asset'] }}" readonly>
						</div>
						<div class="col-xs-1">change</div>
						<div class="col-xs-4">
							<select name="peralatan_tiga[]" id="peralatan_tiga" class="form-control">
								@foreach($peralatan as $key => $item)
								<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
								@endforeach
							</select>
						</div>
					 </div>
				</div>
				@endif
				
				<div class="form-group">
					<div class="col-sm-12" style="text-align: center">

						<button type="submit" id="Kemaskini" value="true" class="btn btn-primary">Kemaskini</button>
						<a href="{{ route('home.show', $id['id']) }}"><button name="Kembali" type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>
					</div>
				</div>
			</form>               
		</div>
	</div> 
</div>
@endsection