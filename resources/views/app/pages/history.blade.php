@extends('app.layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Riwayat</h1>
                <p>Riwayat peminjaman bukumu</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Seharusnya Kembali</th>
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->buku->judul_buku }}</td>
                                <td>{{ $booking->tanggal_pinjam }}</td>
                                <td>{{ $booking->tanggal_kembali }}</td>
                                <td>
                                    @if ($booking->pengembalian)
                                        {{ $booking->pengembalian->tanggal_kembali }}
                                    @else
                                        Belum dikembalikan
                                    @endif
                                </td>
                                <td>
                                    @if ($booking->pengembalian)
                                        Rp{{ number_format($booking->pengembalian->denda, 0, ',', '.') }}
                                    @else
                                        -
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
