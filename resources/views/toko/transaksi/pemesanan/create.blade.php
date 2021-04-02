@extends('layouts/master')
@section('title', 'DPMS | Home')
@section('header_title')
    <i class="mdi mdi-monitor mr-2"></i>Pemesanan
@endsection

@section('title')
    Pemesanan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-lg-4">
                <x-card>
                    <x-slot name="title">
                        Data Pemesan
                    </x-slot>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label text-left">Pemesan</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Pemesan">
                                <span class="input-group-prepend">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_pemesan" class="col-sm-3 col-form-label text-left">Alamat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="alamat_pemesan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp_pemesan" class="col-sm-3 col-form-label text-left">No HP</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" id="hp_pemesan">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="member_pemesan" value="UMUM" disabled>
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-lg-4">
                <x-card>
                    <x-slot name="title">
                        Data Pengirim 
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="customCheck6">Sama Dengan Pemesan</label>
                        </div>
                    </x-slot>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label text-left">Pengirim</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Pengirim">
                                <span class="input-group-prepend">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_pemesan" class="col-sm-3 col-form-label text-left">Alamat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="alamat_pemesan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp_pemesan" class="col-sm-3 col-form-label text-left">No HP</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="hp_pemesan">
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-lg-4">
                <x-card>
                    <x-slot name="title">
                        Data Kurir
                    </x-slot>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label text-left">Kurir</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Kurir">
                                <span class="input-group-prepend">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_pemesan" class="col-sm-3 col-form-label text-left">Alamat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="alamat_pemesan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp_pemesan" class="col-sm-3 col-form-label text-left">No HP</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="hp_pemesan">
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        <x-card>
            <div class="table-responsive">
                <table class="table mb-0 table-centered">
                    <thead>
                        <tr>
                            <th>Compny</th>
                            <th>Bill</th>
                            <th>Average Bill</th>
                            <th>Paid Bill</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="assets/images/widgets/project1.jpg" alt="" class="rounded-circle thumb-sm mr-1"> Micromin</td>
                            <td>4</td>
                            <td>$250</td>
                            <td>$800</td>
                            <td>
                                <i class="fas fa-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
    </div>
</div>
@endsection

@push('css')
    <link href="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
@endpush

@push('js')
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/pages/jquery.datatable.init.js"></script>
@endpush