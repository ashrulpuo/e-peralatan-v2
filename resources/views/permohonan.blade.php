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
              <div class="row">
                <div class="col-md-12">
                  <!-- START CONTENT -->
                  <div class="panel panel-flat">
                    <div class="panel-heading">
                      <h5 class="panel-title">Permohonan Peralatan<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
                      <div class="heading-elements">
                      </div>
                    </div>
                    <div class="panel-body">
                      <form action="{{ route('permohonan.store') }}" class="form-horizontal" role="form" id="kpj_pelawat" method="post" accept-charset="utf-8">
                        @csrf
                        <legend class="text-bold">Maklumat Pemohon</legend>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"><span style="color:red">* </span>Nama</label>
                          <div class="col-sm-4">
                            <input type="text" name="nama" value="" id="nama" class="form-control" placeholder="Nama Pemohon" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"><span style="color:red">* </span>Jawatan</label>
                          <div class="col-sm-4">
                            <input type="text" name="jawatan" value="" id="jawatan" class="form-control" placeholder="Jawatan Pemohon" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"><span style="color:red">* </span>Daerah/Bahagian</label>
                          <div class="col-sm-6">
                            <select name="bahagian" id="bahagian" class="form-control" required>
                              <option value="" selected="selected">-Sila Pilih-</option>
                              <option value="Bahagian Pengurusan Sungai Dan Banjir">Bahagian Pengurusan Sungai Dan Banjir</option>
                              <option value="Bahagian Pembangunan Korporat & Audit Prestasi">Bahagian Pembangunan Korporat & Audit Prestasi</option>
                              <option value="Bahagian Saliran Mesra Alam">Bahagian Saliran Mesra Alam</option>
                              <option value="Bahagian Pengurusan Aset">Bahagian Pengurusan Aset</option>
                              <option value="Bahagian Pengurusan Maklumat">Bahagian Pengurusan Maklumat</option>
                              <option value="Bahagian Pengairan & Saliran Pertanian">Bahagian Pengairan & Saliran Pertanian</option>
                              <option value="Bahagian Khidmat Pengurusan">Bahagian Khidmat Pengurusan</option>
                              <option value="Daerah Petaling">Daerah Petaling</option>
                              <option value="Daerah Hulu Langat">Daerah Hulu Langat</option>
                              <option value="Daerah Kuala Langat">Daerah Kuala Langat</option>
                              <option value="Daerah Hulu Klang">Daerah Hulu Klang</option>
                              <option value="Daerah Klang">Daerah Klang</option>
                              <option value="Daerah Gombak">Daerah Gombak</option>
                              <option value="Daerah Kuala Selangor">Daerah Kuala Selangor</option>
                              <option value="Daerah Hulu Selangor">Daerah Hulu Selangor</option>
                              <option value="Daerah Sabak Bernam">Daerah Sabak Bernam</option>
                              <option value="Daerah Sepang">Daerah Sepang</option>
                              <option value="Daerah BPME">BPME</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"><span style="color:red">* </span>Tujuan</label>
                          <div class="col-sm-4">
                            <input type="text" name="tujuan" value="" id="tujuan" class="form-control" placeholder="Tujuan" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"><span style="color:red">* </span>Tempat Digunakan</label>
                          <div class="col-sm-4">
                            <input type="text" name="tempat_digunakan" value="" id="tempatDigunakan" class="form-control" placeholder="Tempat Digunakan" required>
                          </div>
                        </div>
                        <div class="form-group">
                         <label for="inputPassword3" class="col-sm-3 control-label"><span style="color:red">* </span>
                          <font size="2">Tarikh Pinjam</font>
                        </label>
                        <div class="col-sm-4">
                          <input required name="tarikh_pinjam" id="datepicker" width="312" autocomplete="off"/>
                          <script>
                            $('#datepicker').datepicker({ format: 'dd/mm/yyyy' });
                          </script>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 control-label"><span style="color:red">* </span>
                          <font size="2">Tarikh Dijangka Pulang</font>
                        </label>
                        <div class="col-sm-8">
                          <input required name="tarikh_pulang" id="datepicker2" width="312" autocomplete="off"/>
                          <script>
                            $('#datepicker2').datepicker({ format: 'dd/mm/yyyy', });
                          </script>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label"><span style="color:red">* </span>Peralatan 1</label>
                        <div class="col-sm-6">
                          <select name="id_peralatan1" id="peralatan1" class="form-control" required>
                            <option value="" selected="selected">-Sila Pilih-</option>
                            @foreach($peralatan as $item)
                            <option value="{{ $item->id }}"> {{ $item->peralatan }} ({{ $item->model }})</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Peralatan 2</label>
                        <div class="col-sm-6">
                          <select name="id_peralatan2" id="id_peralatan2" class="form-control">
                            <option value="" selected="selected">-Sila Pilih-</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Peralatan 3</label>
                        <div class="col-sm-6">
                          <select name="id_peralatan3" id="id_peralatan3" class="form-control">
                            <option value="" selected="selected">-Sila Pilih-</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12" style="text-align: center">
                          <button type="submit" id="Hantar" value="true" class="btn btn-success waves-effect waves-light">Hantar</button>
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
<script type="text/javascript">

jQuery(document).ready(function ()
{
  $('#id_peralatan2').prop('disabled', 'disabled');
  $('#id_peralatan3').prop('disabled', 'disabled');

  jQuery('select[name="id_peralatan1"]').on('change',function(){
     var id_peralatan1 = jQuery(this).val();
     if(id_peralatan1)
     {
        jQuery.ajax({
           url : 'dropdownlist/peralatan/' + id_peralatan1,
           type : "GET",
           dataType : "json",
           success:function(data)
           {
              console.log(data);
              $('#id_peralatan2').prop('disabled', false);
              jQuery('select[name="id_peralatan2"]').empty();
              $('select[name="id_peralatan2"]').append('<option value="" selected="selected">-Sila Pilih-</option>');
              jQuery.each(data, function(key,value){
                //console.log(value['peralatan']);
                $('select[name="id_peralatan2"]').append('<option value="'+ value['id'] +'">' + value['peralatan'] + ' (' + value['model'] + ' )' + '</option>');
              });
           }
        });
     }
     else
     {
        $('select[name="id_peralatan2"]').empty();
     }
  });

  //peralatan 3
  jQuery('select[name="id_peralatan2"]').on('change',function(){
     var id_peralatan2 = jQuery(this).val();
     var id_1 = $('select[name="id_peralatan1"]').val()
     if(id_peralatan2)
     {
        jQuery.ajax({
           url : 'dropdownlist/thirdItem/' + id_peralatan2 + '/' + id_1 ,
           type : "GET",
           dataType : "json",
           success:function(data)
           {
              console.log(data);
              $('#id_peralatan3').prop('disabled', false);
              jQuery('select[name="id_peralatan3"]').empty();
              $('select[name="id_peralatan3"]').append('<option value="" selected="selected">-Sila Pilih-</option>');
              jQuery.each(data, function(key,value){
                console.log(value['peralatan']);
                 $('select[name="id_peralatan3"]').append('<option value="'+ value['id'] +'">'+ value['peralatan'] + ' (' + value['model'] + ' )' + '</option>');
              });
           }
        });
     }
     else
     {
        $('select[name="id_peralatan3"]').empty();
     }
  });
});
</script>
@endsection