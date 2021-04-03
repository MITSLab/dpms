@extends('layouts/master')
@section('title', 'DPMS | Home')
@section('header_title')
    <i class="mdi mdi-monitor mr-2"></i>Produk
@endsection

@section('title')
    Produk
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <x-card>
            <div class="button-items">
                <button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fas fa-plus"></i> Baru</button>
                <button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="fas fa-trash"></i> Hapus</button>
                <button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="fas fa-print"></i> Export</button>
            </div>
        </x-card>

        <x-card>
            <x-slot name="title">
                Produk
            </x-slot>
            <x-table>
                <x-slot name="thead">
                    <tr>
                        <th><i class="fas fa-hashtag"></i></th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Satuan</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Stok Min</th>
                        <th class="text-center">Panjang</th>
                        <th class="text-center">Lebar</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Supplier</th>
                        <th>Status</th>
                        <th>Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </x-slot>
                    <tr>
                        <td>01</td>
                        <td>Test Produk 123</td>
                        <td>Poster</td>
                        <th>PCS</th>
                        <td class="text-center">30</td>
                        <td class="text-center">1</td>
                        <td>900</td>
                        <td>400</td>
                        <td>1,000</td>
                        <td>2,000</td>
                        <td>-</td>
                        <td>Active</td>
                        <td>-</td>
                        <td class="text-center"><i class="fas fa-edit"></i></td>
                    </tr>
            </x-table>
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