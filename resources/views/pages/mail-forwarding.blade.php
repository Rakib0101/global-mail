@extends('layouts.app')

@section('content')
    @include('components.mail-forwarding.hero-section')
    @include('components.mail-forwarding.how-it-works-section')
    @include('components.mail-forwarding.benefits-section')
    @include('components.mail-forwarding.pricing-section')
    @include('components.mail-forwarding.cta-section')
@endsection
