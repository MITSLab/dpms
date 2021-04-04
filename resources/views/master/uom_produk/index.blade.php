@extends('layouts/master')
@section('title', 'UOM / Satuan Produk')

@section('header_title')
    <i class="mdi mdi-monitor mr-2"></i>UOM / Satuan Produk
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <x-card>
            <div class="button-items">
                <button onclick="addForm('{{ route('produk.uom.store') }}')" type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fas fa-plus"></i> Baru</button>
                <button onclick="deleteSelected('{{ route('produk.uom.delete_selected') }}')" type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="fas fa-trash"></i> Hapus</button>
            </div>
        </x-card>

        <x-card>
            <x-slot name="title">
                UOM / Satuan Produk
            </x-slot>
            <form action="" method="post" class="form-uom">
                @csrf
                <table class="table dt-responsive nowrap">
                    <thead>
                        <th width="5%">
                            <input type="checkbox" name="select_all" id="select_all">
                        </th>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th width="10%" class="text-center"><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
            </form>
        </x-card>
    </div>
    </div>
</div>

    @if (session('success'))
    <script>
        toastr.success('<?php echo session('success'); ?>')
    </script>
    @endif

@includeIf('master.uom_produk.form')
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link href="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
@endpush

@push('js')
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/jszip.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/pages/jquery.datatable.init.js"></script>

    <!-- App js -->
    <script src="{{asset('templates/horizontal/assets')}}/js/jquery.core.js"></script>
    <script src="{{asset('templates/horizontal/assets')}}/js/app.js"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    
    <script>
        $('.toast').toast({
            delay:2000,
            // Other options
        });
        toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",

        }
    </script>

    <script>
        let table;
    
        $(function () {
            table = $('.table').DataTable({
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('produk.uom.create') }}',
                },
                columns: [
                    {data: 'select_all', searchable: false, sortable: false},
                    {data: 'DT_RowIndex', searchable: false, sortable: false},
                    {data: 'nama'},
                    {data: 'keterangan'},
                    {data: 'aksi', searchable: false, sortable: false},
                ]
            });
    
            $('#modal-form').validator().on('submit', function (e) {
                if (! e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            toastr.success('Uom produk berhasil disimpan');
                        })
                        .fail((errors) => {
                            toastr.error('Tidak dapat menyimpan data');
                            return;
                        });
                }
            });

            $('[name=select_all]').on('click', function () {
                $(':checkbox').prop('checked', this.checked);
            });
        });
    
        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah UOM / Satuan');
    
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama]').focus();
            $('#modal-form [name=keterangan]').focus();
        }
    
        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit UOM / Satuan');
    
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama]').focus();
            $('#modal-form [name=keterangan]').focus();
    
            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama]').val(response.nama);
                    $('#modal-form [name=keterangan]').val(response.keterangan);
                })
                .fail((errors) => {
                    toastr.error('Tidak dapat menampilkan data');
                    return;
                });
        }
    
        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                        toastr.success('Uom produk berhasil dihapus');
                    })
                    .fail((errors) => {
                        toastr.success('Tidak dapat menghapus data');
                        return;
                    });
            }
        }

        
        function deleteSelected(url) {
        if ($('input:checked').length > 1) {
                if (confirm('Yakin ingin menghapus data terpilih?')) {
                    $.post(url, $('.form-uom').serialize())
                        .done((response) => {
                            table.ajax.reload();
                            toastr.success('Uom / Satuan produk terpilih berhasil dihapus');
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menghapus data');
                            return;
                        });
                }
            } else {
                alert('Pilih data yang akan dihapus');
                return;
            }
        }
    </script>
@endpush