@extends('master.master-admin')

@section('content')
<div class="panel-body">
	<h4> Maklumat Pemohon</h4>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<th scope="row">No. Permohonan</th>
				<td>{{ $data['id_permohonan'] }}</td>
			</tr>
			<tr>
				<th scope="row">Nama</th>
				<td>{{ $data['nama'] }} </td>
			</tr>
			<tr>
				<th scope="row">Jawatan</th>
				<td>{{ $data['jawatan'] }} </td>
			</tr>
			<tr>
				<th scope="row">Daerah / Bahagian</th>
				<td>{{ $data['bahagian'] }} </td>
			</tr>
			<tr>
				<th scope="row">Tujuan</th>
				<td>{{ $data['tujuan'] }} </td>
			</tr>
			<tr>
				<th scope="row">Tempat Digunakan</th>
				<td> {{ $data['tempat_digunakan'] }}</td>
			</tr>
			<tr>
				<th scope="row">Tarikh Pinjam</th>
				<td>{{ date('d-m-yy', strtotime($data['peralatan'][0]['tarikh_pinjam'])) }} </td>
			</tr>
			<tr>
				<th scope="row">Tarikh Dijangka Pulang</th>
				<td>{{ date('d-m-yy', strtotime($data['peralatan'][0]['tarikh_pulang'])) }} </td>
			</tr>
			<tr>
				<th scope="row">Status</th>
				<td>
					@if($data['status_permohonan'] == 1)
					Permohonan Baru
					@elseif($data['status_permohonan'] == 2)
					Telah Diluluskan
					@else($data['status_permohonan'] == 3)
					Permohonan Ditolak
					@endif
				</td>

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
					{{ !empty($data['peralatan'][0]['id_peralatan']) ? $data['peralatan'][0]['detail_peralatan']['peralatan'].' - '.$data['peralatan'][0]['detail_peralatan']['model'].' - '.$data['peralatan'][0]['detail_peralatan']['no_asset'] : 'Tiada' }}
				</td>
			</tr>
			<tr>
				<th scope="row">Peralatan 2</th>
				<td>
					{{ !empty($data['peralatan'][1]['id_peralatan']) ? $data['peralatan'][1]['detail_peralatan']['peralatan'].' - '.$data['peralatan'][1]['detail_peralatan']['model'].' - '.$data['peralatan'][1]['detail_peralatan']['no_asset'] : 'Tiada' }}
				</td>
			</tr>
			<tr>
				<th scope="row">Peralatan 3</th>
				<td>
					{{ !empty($data['peralatan'][2]['id_peralatan']) ? $data['peralatan'][2]['detail_peralatan']['peralatan'].' - '.$data['peralatan'][2]['detail_peralatan']['model'].' - '.$data['peralatan'][2]['detail_peralatan']['no_asset'] : 'Tiada' }}
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Maklumat Pengeluar</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('approve', $data['id'] ) }}">
					<div class="form-group">
						<label class="col-sm-3 control-label"><span style="color:red">* </span>Nama</label>
						<div class="col-sm-8">
						<input type="text" name="nama_pengeluar" value="{{ $namaPengeluar }}" id="nama" class="form-control" placeholder="Nama Pengeluar" required readonly>
						</div>
					</div>
					<br>
					<br>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Hantar</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-12" style="text-align: right;">
				@if($data['status_permohonan'] == 1)
				{{-- <a href="{{ route('approve', $data['id'] )}}"><button type="button" id="Lulus" value="true" class="btn btn-success waves-effect waves-light">Lulus</button></a> --}}
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
					Lulus
				</button>
				<a href="{{ route('home.reject', $data['id'] )}}"><button type="button" id="Tidak_lulus" value="true" class="btn btn-warning">Tidak Lulus</button></a>
				<a href="{{ route('home.change', $data['id'] )}}"><button type="button" id="tukarPeralatan" value="true" class="btn btn-info">Tukar Peralatan</button></a>
				@endif

				<a href="{{ route('home.index' )}}"><button type="button" id="Kembali" value="true" class="btn"> << Kembali </button></a>
			</div>
		</div>
	</div>
</div>
@endsection
@push('custom-scripts')
<script>
	var url = "{{URL::to('report/filter')}}/"+ id
	$.ajax({
		url: url,  
		method:"POST",
		data:{
			startDate:startDate,
			endDate:endDate,
			disiplin:disiplin,
			gender:gender,
			race:race
		}
	});
</script>
@endpush