@extends('master.master-admin')

@section('content')
<div class="panel panel-flat">
    <div class="panel-heading">
      <h5 class="panel-title">Daftar Admin<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
      <div class="heading-elements">
      </div>
    </div>
    <div class="panel-body">
      <form action="{{ route('daftar.update', $admin->id) }}" class="form-horizontal" role="form" id="kpj_pelawat" method="post" accept-charset="utf-8">
        @csrf
        @method('PUT')
        <legend class="text-bold">Kemaskini admin</legend>
        @include('staff.form')
       
      <div class="form-group">
        <div class="col-sm-12" style="text-align: center">
          <button type="submit" id="Hantar" value="true" class="btn btn-success waves-effect waves-light">kemaskini</button>
          <a href="{{ route('daftar.index') }}"><button name="Batal" type="button" id="Batal" value="true" class="btn btn-warning">Batal</button></a>
        </div>
      </div>
    </form>               
  </div>
</div> 
@endsection