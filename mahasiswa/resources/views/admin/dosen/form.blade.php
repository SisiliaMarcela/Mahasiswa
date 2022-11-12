<div class="form-group {{ $errors->has('namaDosen') ? 'has-error' : ''}}">
    <label for="namaDosen" class="control-label">{{ 'Namadosen' }}</label>
    <input class="form-control" name="namaDosen" type="text" id="namaDosen" value="{{ isset($dosen->namaDosen) ? $dosen->namaDosen : ''}}" >
    {!! $errors->first('namaDosen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('emailDosenUPH') ? 'has-error' : ''}}">
    <label for="emailDosenUPH" class="control-label">{{ 'Emaildosenuph' }}</label>
    <input class="form-control" name="emailDosenUPH" type="text" id="emailDosenUPH" value="{{ isset($dosen->emailDosenUPH) ? $dosen->emailDosenUPH : ''}}" >
    {!! $errors->first('emailDosenUPH', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('emailDosenNonUph') ? 'has-error' : ''}}">
    <label for="emailDosenNonUph" class="control-label">{{ 'Emaildosennonuph' }}</label>
    <input class="form-control" name="emailDosenNonUph" type="text" id="emailDosenNonUph" value="{{ isset($dosen->emailDosenNonUph) ? $dosen->emailDosenNonUph : ''}}" >
    {!! $errors->first('emailDosenNonUph', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
