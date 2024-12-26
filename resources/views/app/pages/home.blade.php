@extends('app.layouts.main')

@section('content')
    @include('app.components.sections.hero-section')
    @include('app.components.sections.feature-section')
    @include('app.components.sections.book-section')
    @include('app.components.sections.cta-section')
    @include('app.components.sections.testimonial-section')
@endsection
