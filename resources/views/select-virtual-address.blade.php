@extends('layouts.app')

@section('content')
    @include('components.address-selection.progress-bar')
    @include('components.address-selection.hero-section')
    @include('components.address-selection.address-selection')
    @include('components.address-selection.faq-section')
@endsection
