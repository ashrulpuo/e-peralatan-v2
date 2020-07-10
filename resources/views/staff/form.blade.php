<div class="form-group">
    <label class="col-sm-3 control-label"><span style="color:red">* </span>Nama Penuh</label>
    <div class="col-sm-4">
      <input type="text" name="nama_penuh" value="{{ $admin->nama_penuh ?? '' }}" id="nama" class="form-control" placeholder="Nama Pemohon" required>
    </div>
  </div>
  <div class="form-group">
      <label class="col-sm-3 control-label"><span style="color:red">* </span>Username</label>
      <div class="col-sm-4">
        <input type="text" name="name" value="{{ $admin->name ?? '' }}" id="username" class="form-control" placeholder="Username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label"><span style="color:red">* </span>Email</label>
      <div class="col-sm-4">
        <input type="email" name="email" value="{{ $admin->email ?? '' }}" id="nama" class="form-control" placeholder="Nama Pemohon" required>
      </div>
    </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label"><span style="color:red">* </span>Jawatan</label>
    <div class="col-sm-6">
      <select name="jawatan" id="bahagian" class="form-control" required>
        <option value="{{ $admin->jawatan ?? ''}}" selected="selected">{{ $admin->jawatan ?? 'sila pilih'}}</option>
        <option value="Pegawai Teknologi Maklumat">Pegawai Teknologi Maklumat</option>
        <option value=" Penolong Pengawai Teknologi Maklumat"> Penolong Pengawai Teknologi Maklumat</option>
        <option value="Juruteknik Komputer">Juruteknik Komputer</option>
        <option value="Pembantu Tadbir">Pembantu Tadbir</option>
      </select>
    </div>
  </div>