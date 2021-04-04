@extends('layouts/master')
@section('title', 'Pesanan')
@section('header_title')
    <i class="mdi mdi-monitor mr-2"></i>Pesanan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <x-card>
            <div class="button-items">
                <button type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fas fa-plus"></i> Baru</button>
                <button type="button" class="btn btn-soft-warning waves-effect waves-light"><i class="fas fa-edit"></i> Ubah</button>
                <button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="fas fa-trash"></i> Hapus</button>
                <button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="fas fa-print"></i> Export</button>
            </div>
        </x-card>

        <x-card>
            <x-slot name="title">
                Pemesananan
            </x-slot>
            <x-table>
                <x-slot name="thead">
                    <tr>
                        <th><i class="fas fa-hashtag"></i></th>
                        <th>Tanggal</th>
                        <th>Pemesan</th>
                        <th>Membership</th>
                        <th class="text-center">QYT</th>
                        <th class="text-center">Item</th>
                        <th>Nilai Pesanan</th>
                        <th>Status</th>
                        <th>Pembayaran</th>
                        <th>Waktu bayar</th>
                        <th>Ket.</th>
                        <th>Kasir</th>
                        <th>Sales</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </x-slot>
                    <tr>
                        <td>01</td>
                        <td>02/04/2021</td>
                        <td>IBNU IBNU</td>
                        <th>MEMBER</th>
                        <td class="text-center">30</td>
                        <td class="text-center">1</td>
                        <td>1,000,000</td>
                        <td>Belum Diproses</td>
                        <td>Belum Lunas</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Agung</td>
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