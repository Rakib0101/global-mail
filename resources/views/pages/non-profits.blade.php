@extends('layouts.app')

@section('content')
    @include('components.non-profits.hero-section')
    @include('components.non-profits.benefits-section')
    @include('components.non-profits.features-section')
    @include('components.non-profits.testimonials-section')
    @include('components.non-profits.pricing-section')
    @include('components.non-profits.cta-section')
@endsection
