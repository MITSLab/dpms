<x-modal>
    <x-slot name="modalDialogClass">
        modal-xl
    </x-slot>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group row">
                <label for="kategori_user_id" class="col-md-5 col-md-offset-1 control-label">Kategori User</label>
                <div class="col-md-7">
                    <select name="kategori_user_id" id="kategori_user_id" class="form-control" required autofocus>
                        @foreach ($kategori_user as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-md-5 col-md-offset-1 control-label">Nama</label>
                <div class="col-md-7">
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-md-5 col-md-offset-1 control-label">Username</label>
                <div class="col-md-7">
                    <input type="text" name="username" id="username" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-5 col-md-offset-1 control-label">Email</label>
                <div class="col-md-7">
                    <input type="text" name="email" id="email" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-5 col-md-offset-1 control-label">Password</label>
                <div class="col-md-7">
                    <input type="password" name="password" id="password" class="form-control" autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-5 col-md-offset-1 control-label">Konfirmasi Password</label>
                <div class="col-md-7">
                    <input type="password" name="password_confirmation" id="password" class="form-control" autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="path_foto" class="col-md-5 col-md-offset-1 control-label">Foto</label>
                <div class="col-md-7">
                    <input type="text" name="path_foto" id="path_foto" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group row">
                <label for="role_id" class="col-md-5 col-md-offset-1 control-label">Role User</label>
                <div class="col-md-7">
                    <select name="role_id" id="role_id" class="form-control" required autofocus>
                        @foreach ($role as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="telepon" class="col-md-5 col-md-offset-1 control-label">Telepon</label>
                <div class="col-md-7">
                    <input type="text" name="telepon" id="telepon" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-md-5 col-md-offset-1 control-label">Kota</label>
                <div class="col-md-7">
                    <input type="text" name="kota" id="kota" class="form-control" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-md-5 col-md-offset-1 control-label">Kode Pos</label>
                <div class="col-md-7">
                    <input type="text" name="kode_pos" id="Kode_pos" class="form-control" required autofocus>
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
    </div>
</x-modal>