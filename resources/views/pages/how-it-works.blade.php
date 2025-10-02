@extends('layouts.app')

@section('content')
    @include('components.landing-v2.hero-section')
    @include('components.landing-v2.mail-minus-mess')
    @include('components.landing-v2.how-virtual-mailbox-works')
    @include('components.landing-v2.integrations-section')
    @include('components.landing-v2.security-section')
    @include('components.landing-v2.testimonials-section')
    @include('components.landing-v2.perfect-mailbox-section')
    @include('components.landing-v2.how-to-get-mailbox')
    @include('components.landing-v2.faq-section')
@endsection
