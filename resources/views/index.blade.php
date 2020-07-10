@extends('master.master')

@section('content')
<div class="page-container">
  <div class="page-content">
    <div class="content-wrapper">
      <div class="row">
        <div class="wrapper-page-spp">
          <div class="panel panel-flat">
            <a href="/"><img src="assets/img/official.jpg" width="980" height="180"></a>
            <div style="padding:20px 20px 0">
              <div id="carousel-example-captions" data-ride="carousel" class="carousel slide mb-20">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li><li data-target="#carousel-example-captions" data-slide-to="1"></li><li data-target="#carousel-example-captions" data-slide-to="2"></li>                                      </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active">
                      <img src="assets/img/slider1.jpg" alt="">
                    </div>
                    <div class="item">
                      <img src="assets/img/slider2.jpg" alt="">
                    </div>
                    <div class="item">
                      <img src="assets/img/slider3.jpg" alt="">
                    </div>
                  </div>
                  <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> </a>
                  <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> </a>
                </div>
                @if( request()->get('ref_num') )
                <div class="col-md-12">
                  <div class="box box-default">
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Permohonan Berjaya No.Permohonan : {{ request()->get('ref_num') }}</h4>
                        Permohonan Anda telah berjaya, sila simpan no permohonan untuk tujuan semakan.
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                @endif
                <div class="row">
                  <div class="col-md-8">
                    <div class="tabbable panel panel-info panel-bordered mb-10" style="min-height:385px">
                      <ul class="nav nav-tabs bg-primary-600 nav-justified">
                        <li class="active"><a href="#colored-justified-tab2" data-toggle="tab">Informasi</a></li>
                        <li><a href="#colored-justified-tab1" data-toggle="tab">Permohonan Peralatan</a></li>
                      </ul>
                      <div class="tab-content panel-body">
                        <div class="tab-pane active" id="colored-justified-tab2">
                          <p><b><u>PENGENALAN SPHM</u></b></p>
                          <ol>
                            <li>
                              <p><b>SPHM</b> merupakan sistem permohonan peralatan ICT Unit ICT, JPS Selangor. <b>SPHM</b> menyediakan peralatan ICT yang seperti :</p>
                            </li>
                            <ul>
                              <li>Komputer Riba</li>
                              <li>LCD Projektor</li>
                              <li>Skrin Projektor</li>
                              <li>Kamera</li>
                              <li>Video Kamera</li>
                            </ul>
                            <li>
                              <p>Permohonan terbuka kepada semua Jabatan yang menjalankan aktiviti rasmi di JPS Selangor seperti mesyuarat ataupun seminar dan permohonan bagi kegunaan luar Pejabat hanya dibuka kepada pegawai dan kakitangan JPS Selangor sahaja.</p>
                            </li>
                            <li>
                              <p>Pemohon yang telah mendapat kelulusan perlu mengambil peralatan tersebut di Unit ICT, JPS Selangor.</p>
                            </li>
                            <li>
                              <p> Peminjam perlu memastikan tiada sebarang kehilangan atau kerosakan terhadap peralatan yang telah dipinjam sehingga peralatan itu dikembalikan semula kepada Unit ICT, JPS Selangor.</p>
                            </li>
                            <li>
                              <p>Peminjam adalah tertakhluk kepada syarat yang ditetapkan oleh Unit ICT, JPS Selangor.</p>
                            </li>
                          </ol>
                        </div>
                        <div class="tab-pane" id="colored-justified-tab1">
                          <h3 class="no-margin-top">Permohonan dan Semakan</h3>
                          <ul>
                            <li><a href="/permohonan">Borang Permohonan</a></li>
                            <li><a href="/semakan">Semakan Permohonan</a></li>
                          </ul>                                      
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">    
                    <div class="panel panel-primary panel-bordered">
                      <div class="panel-heading">
                        <h6 class="panel-title">Admin</h6>
                      </div>
                      <div class="panel-body" style="height: 330px;">
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                          <div class="col-md-12">
                            <input id="name" type="text" placeholder="username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-md-12">
                            <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group" style="margin-left:10px; margin-right:10px; margin-bottom:10px">
                          <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Log masuk') }}
                          </button>
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