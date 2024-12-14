@extends('layout.dashboard')

@push('styles')
    <link href="/assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <!-- Footable js -->
    <script src="/assets/libs/footable/footable.all.min.js"></script>
    <script src="/assets/js/pages/foo-tables.init.js"></script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title">Daftar Pengembalian Buku</h4>
                <p class="sub-header">
                    include filtering in your FooTable.
                </p>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
                                <select id="demo-foo-filter-status" class="custom-select">
                                    <option value="">Show all</option>
                                    <option value="dikembalikan">Dikembalikan</option>
                                    <option value="terlambat">Terlambat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control"
                                    autocomplete="on">
                            </div>
                        </div>
                    </div>
                </div>

                <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                    <thead>
                        <tr>
                            <th data-toggle="true">Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th data-hide="phone">Tanggal Peminjaman</th>
                            <th data-hide="phone, tablet">Tanggal Pengembalian</th>
                            <th data-hide="phone, tablet">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Belajar Laravel</td>
                            <td>01 Jan 2023</td>
                            <td>15 Jan 2023</td>
                            <td><span class="badge label-table badge-success">Dikembalikan</span></td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Mastering PHP</td>
                            <td>05 Jan 2023</td>
                            <td>20 Jan 2023</td>
                            <td><span class="badge label-table badge-warning">Terlambat</span></td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Web Development with Vue.js</td>
                            <td>10 Jan 2023</td>
                            <td>25 Jan 2023</td>
                            <td><span class="badge label-table badge-success">Dikembalikan</span></td>
                        </tr>
                        <tr>
                            <td>Emily White</td>
                            <td>Introduction to JavaScript</td>
                            <td>15 Jan 2023</td>
                            <td>30 Jan 2023</td>
                            <td><span class="badge label-table badge-warning">Terlambat</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <div class="text-right">
                                    <ul
                                        class="pagination pagination-split justify-content-end footable-pagination m-t-10 mb-0">
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
