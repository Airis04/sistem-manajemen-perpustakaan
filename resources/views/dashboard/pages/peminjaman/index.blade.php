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
                </div>

                <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Nama Anggota</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali Seharusnya</th>
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($peminjaman as $item)
                            <tr>
                                <td>{{ $item->anggota->nama }}</td>
                                <td>{{ $item->buku->judul_buku }}</td>
                                <td>{{ $item->tanggal_pinjam }}</td>
                                <td>{{ $item->tanggal_kembali }}</td>
                                <td>
                                    @if ($item->pengembalian)
                                        {{ $item->pengembalian->tanggal_kembali }}
                                    @else
                                        Belum dikembalikan
                                    @endif
                                </td>
                                <td>
                                    @if ($item->pengembalian)
                                        Rp{{ number_format($item->pengembalian->denda, 0, ',', '.') }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if ($item->pengembalian)
                                        <span class="text-success">Buku sudah dikembalikan</span>
                                    @else
                                        <a href="{{ route('dashboard.peminjaman.show', $item->id) }}"
                                            class="btn btn-primary btn-sm">Pengembalian</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
