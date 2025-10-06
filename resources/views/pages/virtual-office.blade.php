@extends('layouts.app')

@section('content')
    @include('components.virtual-office.hero-section')
    @include('components.virtual-office.key-features')
    @include('components.virtual-office.location-selection')
    @include('components.virtual-office.benefits-comparison')
    @include('components.virtual-office.pricing-section')
    @include('components.virtual-office.business-support')
    @include('components.virtual-office.testimonials')
    @include('components.virtual-office.faq-section')
    @include('components.virtual-office.final-cta')
@endsection
