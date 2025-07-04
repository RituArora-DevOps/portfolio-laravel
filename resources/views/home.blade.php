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
      <a class="btn btn-primary btn-lg" href="{{ route('contact', ['lang' => app()->getLocale()]) }}" role="button">
      {{ __('navbar.resume') }}
      </a>
    </div>
    <div class="profile-image">
      <img src="{{ asset('images/dp-nobg2.png') }}" alt="{{ __('home.profile_alt') }}" class="img-fluid" />
    </div>
    </div>
  </section>

  <!-- Featured Projects Section -->
  <section id="projects" class="container py-5" aria-labelledby="projects-heading">
    <h1 class="mb-4 text-center" id="projects-heading">{{ __('home.projects_heading') }}</h1>
    <div id="featuredProjectsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Car Rental Management System -->
      <div class="carousel-item active">
      <div class="card project-card">
        <img src="{{ asset('images/project-car-rental.PNG') }}" class="card-img-top"
        alt="Car Rental Management System" />
        <div class="card-body">
        <h2>{{ __('home.car_rental.title') }}</h2>
        <ul>
          <li>{{ __('home.car_rental.description') }}</li>
          <li>{{ __('home.car_rental.tech') }}</li>
        </ul>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <a href="https://github.com/RituArora-DevOps/RentnDrive.git" target="_blank"
          class="btn btn-outline-dark">{{ __('home.source_code') }}</a>
          <a href="https://johnabbott-my.sharepoint.com/:p:/g/personal/6347472_johnabbottcollege_net/ET5Tcd8-XK5ArPMco5dLNNkBJGi-lbZYCZZf7KdHmdklDA?e=KCCLp6"
          target="_blank" class="btn btn-outline-primary">{{ __('home.ppt') }}</a>
          <a href="https://youtu.be/VGSBVmFnqrc" target="_blank"
          class="btn btn-outline-success">{{ __('home.view_demo') }}</a>
          <a href="https://car-rental-web-dy3f.onrender.com" target="_blank"
          class="btn btn-outline-info">{{ __('home.view_live') }}</a>
        </div>
        </div>
      </div>
      </div>

      <!-- Day Care Management System -->
      <div class="carousel-item">
      <div class="card project-card">
        <img src="{{ asset('images/project-daycare.PNG') }}" class="card-img-top" alt="Day Care Management System" />
        <div class="card-body">
        <h2>{{ __('home.daycare.title') }}</h2>
        <ul>
          <li>{{ __('home.daycare.description') }}</li>
          <li>{{ __('home.daycare.tech') }}</li>
        </ul>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <a href="https://github.com/FYFYBai/DayCare_Team4.git" target="_blank"
          class="btn btn-outline-dark">{{ __('home.source_code') }}</a>
          <a href="https://johnabbott-my.sharepoint.com/:p:/g/personal/6347472_johnabbottcollege_net/EZ4fMFfBrglFoiNuhL8s3gABdigdZp9ne0JibD0WUK-z9Q?e=IIzw7p"
          target="_blank" class="btn btn-outline-primary">{{ __('home.ppt') }}</a>
          <a href="https://team4.fsd13.ca" target="_blank"
          class="btn btn-outline-success">{{ __('home.view_live') }}</a>
        </div>
        </div>
      </div>
      </div>

      <!-- Personal Portfolio Project -->
      <div class="carousel-item">
      <div class="card project-card">
        <img src="{{ asset('images/project-portfolio.PNG') }}" class="card-img-top"
        alt="Personal Portfolio Screenshot" />
        <div class="card-body">
        <h2>{{ __('home.portfolio.title') }}</h2>
        <ul>
          <li>{{ __('home.portfolio.description') }}</li>
          <li>{{ __('home.portfolio.tech') }}</li>
          <li>{{ __('home.portfolio.upcoming') }}</li>
        </ul>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <a href="https://github.com/RituArora-DevOps/portfolio-laravel.git" target="_blank"
          class="btn btn-outline-dark">{{ __('home.source_code') }}</a>
        </div>
        </div>
      </div>
      </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#featuredProjectsCarousel" data-bs-slide="prev"
      aria-label="Previous Project">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{ __('home.previous') }}</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featuredProjectsCarousel" data-bs-slide="next"
      aria-label="Next Project">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{ __('home.next') }}</span>
    </button>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="container py-5" aria-labelledby="testimonials-heading">
    <h1 class="mb-4 text-center" id="testimonials-heading">{{ __('home.testimonials_heading') }}</h1>
    <div id="testimonialContainer" class="row testimonial-section">
    <!-- Testimonials will be dynamically inserted here -->
    </div>
  </section>
@endsection