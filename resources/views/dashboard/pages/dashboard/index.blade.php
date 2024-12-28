@extends('dashboard.layouts.main')

@push('styles')
    <!-- Chart css -->
    <link href="/assets/dashboard/libs/c3/c3.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <!--Chart-->
    <script src="/assets/dashboard/libs/d3/d3.min.js"></script>
    <script src="/assets/dashboard/libs/c3/c3.min.js"></script>
    <script src="/assets/dashboard/libs/echarts/echarts.min.js"></script>
@endpush

@section('content')
    @include('dashboard.components.dashboard.overview')

    <div class="row">
        @include('dashboard.components.dashboard.top-category')
        @include('dashboard.components.dashboard.anggota-chart')
    </div>
@endsection
