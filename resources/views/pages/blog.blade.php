@extends('layouts.app')

@section('content')
    @include('components.blog.hero-section')
    @include('components.blog.featured-posts-section')
    @include('components.blog.categories-section')
    @include('components.blog.newsletter-section')
@endsection
