@extends('master.master')

@section('content')
<style>
	body {
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
	}

	.topnav {
		overflow: hidden;
		background-color:  #2e3192;
	}

	.topnav a {
		float: left;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: #9ea0e0;
		color: black;
	}

	.topnav a.active {
		background-color: #00ace6;
		color: white;
	}
	table, td, th {
		border: 1px solid black;

	}

	#table {
		border-collapse: collapse;
	}
</style>

<div class="page-container">
	<div class="page-content">
		<div class="content-wrapper">
			<div class="row">
				<div class="wrapper-page-spp">
					<div class="panel panel-flat">
						<a href="{{ route('home.index') }}"><img src="{{ asset('assets/img/official.jpg') }}" width="980" height="180"></a>
						<div style="padding:20px 20px 0">
							<div class="topnav">
								<a class="active" href="{{ route('home.index') }}">Permohonan Baru</a>
								<a href="{{ route('senarai.index') }}">Senarai Permohonan</a>
								<a href="{{ route('laporan.index') }}">Laporan</a>
								<a class="{{ (request()->is('daftar')) ? 'active' : '' }}" href="{{ route('daftar.index') }}">Daftar Admin</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Keluar') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
						<div class="panel-body">
							<table id="table" width="100%">
								<tr>
									<th align="center">Bil</th>
									<th align="center">Maklumat Pemohon</th>
									<th align="center">Maklumat Peralatan</th>  
								</tr>
								@foreach($data as $key => $pemohon)
								<tr>
									<td>{{ $key+1 }} .</td>
									<td>Nama: {{ $pemohon['nama'] }}<br>
										Jawatan: {{ $pemohon['jawatan'] }}<br>
										Bahagian: {{ $pemohon['bahagian'] }}
										<p><a href="{{ route('home.show', $pemohon['id']) }}"><button name="lihat_lanjut" type="submit" id="lihat_lanjut" value="true" class="btn btn-info btn-sm" >Lihat lanjut</button></a></p>
									</td>
									<td>Peralatan 1: {{ !empty($pemohon['peralatan'][0]['detail_peralatan']['peralatan']) ? $pemohon['peralatan'][0]['detail_peralatan']['peralatan'] : '-' }}<br>

										Peralatan 2: {{ !empty($pemohon['peralatan'][1]['detail_peralatan']['peralatan']) ? $pemohon['peralatan'][1]['detail_peralatan']['peralatan'] : '-' }}<br>
										Peralatan 3: {{ !empty($pemohon['peralatan'][2]['detail_peralatan']['peralatan']) ? $pemohon['peralatan'][2]['detail_peralatan']['peralatan'] : '-' }}
									</td>
								</tr>
								@endforeach
							</table>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection