


<div class="modal fade bd-example-modal" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog">
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
                <label for="nama" class="col-md-5 col-md-offset-1 control-label">Nama Satuan</label>
                <div class="col-md-7">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="e.g PCS" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-md-5 col-md-offset-1 control-label">Keterangan</label>
                <div class="col-md-7">
                    <input type="text" name="keterangan" id="keterangan" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
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