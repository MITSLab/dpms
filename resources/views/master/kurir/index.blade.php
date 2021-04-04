@extends('layouts/master')
@section('title', 'Kurir')

@section('header_title')
    <i class="mdi mdi-monitor mr-2"></i>Kurir
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <x-card>
            <div class="button-items">
                <button onclick="addForm('{{ route('kontak.kurir.store') }}')" type="button" class="btn btn-soft-primary waves-effect waves-light"><i class="fas fa-plus"></i> Baru</button>
            </div>
        </x-card>

        <x-card>
            <x-slot name="title">
                Kurir
            </x-slot>
                <table class="table dt-responsive nowrap">
                    <thead>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th width="10%" class="text-center"><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
        </x-card>
    </div>
    </div>
</div>

@includeIf('master.kurir.form')
@endsection

@push('js')
    <script>
        let table;
    
        $(function () {
            table = $('.table').DataTable({
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('kontak.kurir.create') }}',
                },
                columns: [
                    {data: 'DT_RowIndex', searchable: false, sortable: false},
                    {data: 'nama'},
                    {data: 'telepon'},
                    {data: 'alamat'},
                    {data: 'aksi', searchable: false, sortable: false},
                ]
            });
    
            $('#modal-form').validator().on('submit', function (e) {
                if (! e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            toastr.success('Data berhasil disimpan');
                        })
                        .fail((errors) => {
                            toastr.error('Tidak dapat menyimpan data');
                            return;
                        });
                }
            });
        });
    
        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Kurir');
    
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama]').focus();
            $('#modal-form [name=telepon]').focus();
            $('#modal-form [name=alamat]').focus();

        }
    
        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Kurir');
    
            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama]').focus();
            $('#modal-form [name=telepon]').focus();
            $('#modal-form [name=alamat]').focus();
    
            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama]').val(response.nama);
                    $('#modal-form [name=telepon]').val(response.telepon);
                    $('#modal-form [name=alamat]').val(response.alamat);

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
                        toastr.success('Data berhasil dihapus');
                    })
                    .fail((errors) => {
                        toastr.success('Tidak dapat menghapus data');
                        return;
                    });
            }
        }
    </script>
@endpush