@extends('master.master-admin')

@section('content')
<div class="panel panel-flat">
    <div class="panel-heading">
      <h5 class="panel-title">Daftar Admin<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"></a></h5>
      <div class="heading-elements">
      </div>
    </div>
    <div class="panel-body">
        <a href="{{ route('daftar.create') }}"><button class="btn btn-primary" style="float: right;">Daftar admin</button></a>
    </br>
</br>

                   <table width="100%">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th scope="row">Nama</th>
                            <th scope="row">Username</th>
                            <th scope="row">Jawatan</th>
                            <th scope="row">Tindakan</th>
                        </tr>
                        @foreach($admins as $key => $admin)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $admin->nama_penuh }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->jawatan }}</td>
                            <td>
                                <a href="{{ route('daftar.edit', $admin->id) }}"><button class="btn btn-primary">Kemaskini</button></a>
                                @if($admin->id != $id)
                                <button type="button" data-id="{{ $admin->id }}" class="btn btn-danger delete">Padam</button>
                                @endif
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                   </table>
  </div>
</div> 
<script>
    $('body').on('click', '.delete', function () {
            var id = $(this).data("id");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "daftar"+'/'+ id,
                headers: {
                     'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (data) {
                    window.setTimeout(function(){location.reload()},1000)
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
</script>
@endsection