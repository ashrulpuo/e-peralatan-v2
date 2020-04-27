@extends('master.master-admin')

@section('content')
<h4> Senarai Permohonan</h4>
<div class="panel-body">
	<table id="table" width="100%">
		<tr>
			<th align="center">Bil</th>
			<th align="center">Maklumat Pemohon</th>
			<th align="center">Tempat & Tujuan</th> 
			<th>Status</th>
			<th>Status Pemulangan</th>
			<th>Tindakan</th>

		</tr>
		@foreach($data as $key => $pemohon)
		<tr>
			<td>{{ $key + 1 }}</td>
			<td>Nama: {{ $pemohon['nama'] }}<br>
				Jawatan:{{ $pemohon['jawatan'] }}<br>
				Bahagian: {{ $pemohon['bahagian'] }}

			</td>
			<td>
				Tempat: {{ $pemohon['tempat_digunakan'] }}<br>
				Tujuan: {{ $pemohon['tujuan'] }}
			</td>
			<td>
				@if($pemohon['status_permohonan'] == 1)
				Permohonan Baru
				@elseif($pemohon['status_permohonan'] == 2)
				Telah Diluluskan
				@else($pemohon['status_permohonan'] == 3)
				Permohonan Ditolak
				@endif
			</td>
			<td>
				@if($pemohon['status_permohonan'] != 3)
					<a href="{{ route('pulang.show', $pemohon['id']) }}"><button name="pulang" type="button" id="pulang" value="true" class="btn btn-primary">Pulang Peralatan </button></a>
				@else
					<center> - </center>
				@endif
			</td>
			<td>
				@if($pemohon['status_permohonan'] != 3)
					<a href="{{ route('home.show', $pemohon['id']) }}"><button name="pulang" type="button" id="pulang" value="true" class="btn btn-primary">Lihat lanjut </button></a>
				@else
					<center> - </center>
				@endif
			</td>
			@endforeach
		</tr>
	</table>
</div> 
@endsection