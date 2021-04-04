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
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
        </div>
    </div>
    </form>
    </div>
</div>