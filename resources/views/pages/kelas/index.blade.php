@extends('layout.dashboard')

@push('styles')
    <link href="/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                <div class="d-flex justify-content-between mb-3">
                    <h4 class="header-title">{{ $title }}</h4>
                    <a href="{{ route('dashboard.kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
                </div>

                <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($kelas as $item)
                            <tr>
                                <td>{{ $item->kelas }}</td>
                                <td>
                                    <a href="{{ route('dashboard.kelas.edit', $item->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('dashboard.kelas.destroy', $item->id) }}" method="POST"
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
