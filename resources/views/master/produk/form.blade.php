<div class="modal fade bs-example-modal-lg" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')
        <div class="modal-header">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
        </h5>
        <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
        >
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <label for="kode" class="col-md-3 col-md-offset-1 control-label">Kode Produk</label>
                <div class="col-md-9">
                    <input type="text" name="kode" id="kode" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-md-3 col-md-offset-1 control-label">Nama Produk</label>
                <div class="col-md-9">
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_kategori" class="col-md-3 col-md-offset-1 control-label">Kategori</label>
                <div class="col-md-9">
                    <select name="kategori_produk_id" id="id_kategori" class="form-control" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $key => $item)
                        <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 my-2 control-label">Satuan</label>
                <div class="col-md-9">
                    @foreach ($uom as $key => $item)
                        <div class="checkbox my-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="uom[]" class="custom-control-input" value="{{ $key }}" id="{{ $key }}" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="{{ $key }}">{{ $item }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-md-3 col-md-offset-1 control-label">Stok</label>
                <div class="col-md-9">
                    <input type="number" name="stok" id="stok" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok_min" class="col-md-3 col-md-offset-1 control-label">Stok Min</label>
                <div class="col-md-9">
                    <input type="number" name="stok_min" id="stok_min" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="panjang" class="col-md-3 col-md-offset-1 control-label">Panjang</label>
                <div class="col-md-9">
                    <input type="number" name="panjang" id="panjang" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-md-3 col-md-offset-1 control-label">Lebar</label>
                <div class="col-md-9">
                    <input type="number" name="lebar" id="lebar" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-md-3 col-md-offset-1 control-label">Harga Beli</label>
                <div class="col-md-9">
                    <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-md-3 col-md-offset-1 control-label">Harga Jual</label>
                <div class="col-md-9">
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 my-2 control-label">Status</label>
                <div class="col-md-9">
                        <div class="checkbox my-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="is_active" class="custom-control-input" value="1" id="is_active" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="is_active">Aktif</label>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
        </div>
    </div>
    </form>
    </div>
</div>