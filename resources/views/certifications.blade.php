@extends('layouts.app')

@section('title', __('certifications.page_title'))
@section('description', __('certifications.page_description'))

@section('content')
<main class="flex-grow-1 text-center">
    <h1>{{ __('certifications.heading') }}</h1>
    <p>{{ __('certifications.under_construction') }}</p>
    <p>{{ __('certifications.check_back') }}</p>
    <img 
        src="{{ asset('images/construction.jpg') }}" 
        alt="{{ __('certifications.alt') }}" 
        class="img-fluid my-4"
    >
</main>
@endsection
