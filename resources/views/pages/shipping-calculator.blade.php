@extends('layouts.app')

@section('content')
    @include('components.shipping-calculator.hero-section')
    @include('components.shipping-calculator.calculator-section')
    @include('components.shipping-calculator.shipping-options-section')
    @include('components.shipping-calculator.cta-section')
@endsection
