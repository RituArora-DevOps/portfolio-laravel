<nav class="navbar navbar-expand-lg navbar-dark px-3 py-2" aria-label="Main Navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home', ['lang' => app()->getLocale()]) }}" id="home-link">
            <img src="{{ asset('images/logo.jpg') }}" alt="Dr. Ritu Arora's Logo" class="img-fluid"
                style="max-width: 50px; height: auto; border-radius: 50%; object-fit: cover;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is(app()->getLocale()) ? 'active' : '' }}"
                        href="{{ route('home', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-house-door"></i> {{ __('navbar.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-person"></i> {{ __('navbar.about') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skills', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-lightbulb"></i> {{ __('navbar.skills') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-kanban"></i> {{ __('navbar.projects') }}
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('publications', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-journal"></i> {{ __('navbar.publications') }}
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('certifications', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-award"></i> {{ __('navbar.certifications') }}
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact', ['lang' => app()->getLocale()]) }}">
                        <i class="bi bi-envelope"></i> {{ __('navbar.contact') }}
                    </a>
                </li> -->
            </ul>

            <div class="ms-3">
                @php
                    $currentLocale = app()->getLocale();
                    $targetLocale = $currentLocale === 'en' ? 'fr' : 'en';

                    // Replace the first URL segment (locale) with the other language
                    $segments = request()->segments();
                    $segments[0] = $targetLocale;
                    $switchUrl = url(implode('/', $segments));
                @endphp

                <div class="ms-3">
                    <a href="{{ $switchUrl }}" class="btn btn-outline-light">
                        {{ __('navbar.language_switch') }}
                    </a>

                    @php
                        // Restore original locale
                        App::setLocale($currentLocale);
                    @endphp
                </div>

            </div>
        </div>
    </div>
</nav>