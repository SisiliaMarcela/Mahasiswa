<div class="form-group {{ $errors->has('studentID') ? 'has-error' : ''}}">
    <label for="studentID" class="control-label">{{ 'Studentid' }}</label>
    <input class="form-control" name="studentID" type="text" id="studentID" value="{{ isset($mahasiswax->studentID) ? $mahasiswax->studentID : ''}}" >
    {!! $errors->first('studentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($mahasiswax->nama) ? $mahasiswax->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jurusan') ? 'has-error' : ''}}">
    <label for="jurusan" class="control-label">{{ 'Jurusan' }}</label>
    <input class="form-control" name="jurusan" type="text" id="jurusan" value="{{ isset($mahasiswax->jurusan) ? $mahasiswax->jurusan : ''}}" >
    {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun_masuk') ? 'has-error' : ''}}">
    <label for="tahun_masuk" class="control-label">{{ 'Tahun Masuk' }}</label>
    <input class="form-control" name="tahun_masuk" type="text" id="tahun_masuk" value="{{ isset($mahasiswax->tahun_masuk) ? $mahasiswax->tahun_masuk : ''}}" >
    {!! $errors->first('tahun_masuk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
