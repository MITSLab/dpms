<x-modal>
    <div class="form-group row">
        <label for="kontak_id" class="col-md-5 col-md-offset-1 control-label">Pilih Kontak</label>
        <div class="col-md-7">
            <select name="kontak_id" id="kontak_id" class="form-control" required autofocus>
                @foreach ($kontak as $key => $item)
                    <option value="{{ $key }}">{{ $item }}</option>
                @endforeach
            </select>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="Kota" class="col-md-5 col-md-offset-1 control-label">Kota</label>
        <div class="col-md-7">
            <input type="text" name="Kota" id="Kota" class="form-control" required autofocus>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="kode_pos" class="col-md-5 col-md-offset-1 control-label">Kode Pos</label>
        <div class="col-md-7">
            <input type="text" name="kode_pos" id="kode_pos" class="form-control" required autofocus>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-md-5 col-md-offset-1 control-label">Alamat</label>
        <div class="col-md-7">
            <textarea rows="3" name="alamat" id="alamat" class="form-control" required autofocus></textarea>
            <span class="help-block with-errors"></span>
        </div>
    </div>
</x-modal>