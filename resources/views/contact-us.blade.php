@extends('layouts.app')

@section('content')
    @include('components.contact-us.form-section')
    @include('components.contact-us.map-section')
    {{-- @include('components.landing.main-cta') --}}
    @include('components.contact-us.testimonial-section')
@endsection
