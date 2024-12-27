@extends('dashboard.layouts.main')

@push('styles')
    <link href="/assets/dashboard/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="/assets/dashboard/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/dashboard/libs/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#datatable").DataTable({
                "order": []
            });
        });
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <div class="d-flex justify-content-between mb-3">
                    <h4 class="header-title">{{ $title }}</h4>
                    <a href="{{ route('dashboard.anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
                </div>

                <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($anggota as $item)
                            <tr>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telpon }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ route('dashboard.anggota.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('dashboard.anggota.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
