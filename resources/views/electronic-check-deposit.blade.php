@extends('layouts.app')

@section('content')
    @include('components.electronic.hero-section')
    @include('components.electronic.mail-address-management')
    @include('components.electronic.virtual-address')
    @include('components.electronic.virtual-mailbox')
    @include('components.electronic.features')
    @include('components.electronic.testimonial')
    @include('components.electronic.build-business')
    @include('components.electronic.cta')
@endsection
