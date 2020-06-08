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
					<label class="col-sm-3 control-label"><span style="color:red">* </span>Peralatan 1</label>
					<div class="col-sm-6">
						<select name="peralatan1" id="peralatan1" class="form-control">
							<option value="" selected="selected">-Sila Pilih-</option>
							<option value="" selected="selected"  disabled>
								{{ $pemohonItems[0][0]['detail_peralatan']['peralatan'] }} -- 
								{{ $pemohonItems[0][0]['detail_peralatan']['model'] }} -- 
								{{ $pemohonItems[0][0]['detail_peralatan']['no_asset'] }}
							</option>
							@foreach($peralatan as $key => $item)
							<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
							@endforeach

						</select>
					</div>
				</div>
				@endif
				@if (!empty($pemohonItems[0][1]['detail_peralatan']['peralatan']))
				<div class="form-group">
					<label class="col-sm-3 control-label">Peralatan 2</label>
					<div class="col-sm-6">
						<select name="peralatan2" id="peralatan2" class="form-control">
							<option value="" selected="selected">-Sila Pilih-</option>
							<option value="" selected="selected" disabled>
								{{ $pemohonItems[0][1]['detail_peralatan']['peralatan'] }} -- 
								{{ $pemohonItems[0][1]['detail_peralatan']['model'] }} -- 
								{{ $pemohonItems[0][1]['detail_peralatan']['no_asset'] }}
							</option>
							@foreach($peralatan as $key => $item)
							<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
							@endforeach
						</select>
					</div>
				</div>
				@endif
				@if (!empty($pemohonItems[0][2]['detail_peralatan']['peralatan']))
				<div class="form-group">
					<label class="col-sm-3 control-label">Peralatan 3</label>
					<div class="col-sm-6">
						<select name="peralatan3" id="peralatan3" class="form-control">
							<option value="" selected="selected">-Sila Pilih-</option>
							<option value="" selected="selected">
								{{ $pemohonItems[0][2]['detail_peralatan']['peralatan'] }} -- 
								{{ $pemohonItems[0][2]['detail_peralatan']['model'] }} -- 
								{{ $pemohonItems[0][2]['detail_peralatan']['no_asset'] }}
							</option>
							@foreach($peralatan as $key => $item)
							<option value="{{ $item->id }}">{{ $item->peralatan }} ({{ $item->model }})</option>
							@endforeach
						</select>
					</div>
				</div>
				@endif
				<div class="form-group">
					<div class="col-sm-12" style="text-align: center">

						<button name="Kemaskini" type="submit" id="Kemaskini" value="true" class="btn btn-primary">Kemaskini</button>
						<a href="{{ route('home.show', $id['id']) }}"><button name="Kembali" type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>
					</div>
				</div>
			</form>               
		</div>
	</div> 
</div>
@endsection