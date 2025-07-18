@extends('layouts.app')

@section('title', __('home.page_title'))

@section('content')
  <!-- Jumbotron / Hero Section -->
  <section class="jumbotron my-4" aria-labelledby="main-heading">
    <div class="container">
    <div class="content">
      <h1 class="display-4" id="main-heading">{{ __('home.name') }}</h1>
      <h2 class="tagline">{{ __('home.tagline') }}</h2>
      <p class="lead">{{ __('home.intro') }}</p>
      <a class="btn btn-primary btn-lg"
      href="{{ asset(app()->getLocale() === 'fr' ? 'docs/resume_fr.pdf' : 'docs/resume_en.pdf')}}" role="button"
      target="_blank" rel="noopener noreferrer">
      {{ __('navbar.resume') }}
      </a>

      <!-- </div>
    <div class="profile-image">
      <img src="{{ asset('images/dp-nobg2.png') }}" alt="{{ __('home.profile_alt') }}" class="img-fluid" />
    </div>
    </div> -->
  </section>

@endsection