@extends('master.master-admin')

@section('content')
<div class="panel-body">
	<h4> Laporan SPHM </h4>
	<div class="panel-body">
		<table id="table" width="100%">
			<tr>
				<th rowspan="2" align="center">Bil</th>
				<th rowspan="2" align="center">Peminjam</th>
				<th rowspan="2" align="center">Pemulang</th> 
				<th colspan="2" align="center">Tarikh</th>
				<th rowspan="2">Tindakan</th>
			</tr>
			<tr>
				<td>Pinjam </td>
				<td>Pulang</td>
			</tr>
			@foreach($pemohon as $key => $data)
			<tr>
				<td>{{  $key + 1 }}</td>
				<td> {{ $data['nama'] }}</td>
				<td> {{ $data['nama_pemulang'] }}</td>
				<td> {{ date('d-m-y', strtotime($data['peralatan'][0]['tarikh_pinjam'])) }}</td>
				<td> {{ date('d-m-y', strtotime($data['updated_at'])) }}</td>
				<td> <a href="{{ route('laporan.show', $data['id']) }}"><button name="cetak" type="button" id="pulang" value="true" class="btn btn-primary">Cetak </button></a></td>
			</tr>
			@endforeach
		</table>
	</div> 
</div>
@endsection