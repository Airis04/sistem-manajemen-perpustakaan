@extends('layout.main')

@push('styles')
    <link href="/assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                <h4 class="header-title">Daftar Buku</h4>
                <p class="sub-header">
                    include filtering in your FooTable.
                </p>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
                                <select id="demo-foo-filter-status" class="custom-select">
                                    <option value="">Show all</option>
                                    <option value="tersedia">Tersedia</option>
                                    <option value="dipinjam">Dipinjam</option>
                                    <option value="dalam-perbaikan">Dalam Perbaikan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control"
                                    autocomplete="on">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://assets.lulu.com/cover_thumbs/z/m/zmmvvj2-ebook-shortedge-384.jpg" class="card-img-top" alt="Belajar Laravel">
                            <div class="card-body">
                                <h5 class="card-title">Belajar Laravel</h5>
                                <p class="card-text">Penulis: John Doe</p>
                                <p class="card-text">Tahun Terbit: 2020</p>
                                <span class="badge badge-success">Tersedia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://example.com/path/to/php-book.jpg" class="card-img-top" alt="Mastering PHP">
                            <div class="card-body">
                                <h5 class="card-title">Mastering PHP</h5>
                                <p class="card-text">Penulis: Jane Smith</p>
                                <p class="card-text">Tahun Terbit: 2018</p>
                                <span class="badge badge-danger">Dipinjam</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://example.com/path/to/vuejs-book.jpg" class="card-img-top" alt="Web Development with Vue.js">
                            <div class="card-body">
                                <h5 class="card-title">Web Development with Vue.js</h5>
                                <p class="card-text">Penulis: Michael Brown</p>
                                <p class="card-text">Tahun Terbit: 2019</p>
                                <span class="badge badge-warning">Dalam Perbaikan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://example.com/path/to/javascript-book.jpg" class="card-img-top" alt="Introduction to JavaScript">
                            <div class="card-body">
                                <h5 class="card-title">Introduction to JavaScript</h5>
                                <p class="card-text">Penulis: Emily White</p>
                                <p class="card-text">Tahun Terbit: 2021</p>
                                <span class="badge badge-success">Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
