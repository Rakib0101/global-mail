@extends('layouts.app')

@section('content')
    @include('components.about-us.hero-section')
    @include('components.about-us.feature-section')
    @include('components.about-us.goal-section')
    @include('components.about-us.journey-section')
    @include('components.about-us.team-section')
    @include('components.about-us.award-section')
    @include('components.about-us.founder-qoute')
    @include('components.about-us.cta-section')
@endsection
