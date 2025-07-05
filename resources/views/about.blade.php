@extends('layouts.app')

@section('title', __('about.page_title'))
@section('description', __('about.description'))

@section('content')
    <main class="flex-grow-1 bg-light py-5">

        <!-- Biography Section -->
        <section id="biography" class="mb-5">
            <h1 class="display-5 mb-3 border-bottom pb-2">{{ __('about.biography_heading') }}</h1>
            <p class="lead">{{ __('about.biography_text') }}</p>
        </section>

        <!-- Career Highlights Section -->
        <section id="career-highlights" class="mb-4">
            <h2 class="h3 mb-3 border-bottom pb-2">{{ __('about.career_heading') }}</h2>
            <ul class="list-group list-group-flush">
                @foreach(__('about.career_items') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </section>

        <!-- Quote of the Day -->
        @if (app()->getLocale() === 'en')
            <section id="quote-of-the-day" class="mb-5">
                <h2 class="h3 mb-3 border-bottom pb-2">{{ __('about.quote_heading') }}</h2>
                <blockquote id="quote-text" class="blockquote fst-italic"></blockquote>
                <footer id="quote-author" class="blockquote-footer mt-2"></footer>
            </section>
        @endif

        <!-- Contact Information -->
        <section id="contact-info" class="mt-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Contact Information</h2>
            <ul class="list-unstyled">
                <li><strong>Email:</strong> <a href="mailto:arora0824@gmail.com">arora0824@gmail.com</a></li>
                <li><strong>GitHub:</strong> <a href="https://github.com/RituArora-DevOps"
                        target="_blank">github.com/RituArora-DevOps</a></li>
                <li><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/ritu-arora-dr"
                        target="_blank">linkedin.com/in/ritu-arora-dr</a></li>
                <li><strong>Location:</strong> Greater Montréal, QC</li>
            </ul>
        </section>
    </main>
@endsection

@section('scripts')
    @if (app()->getLocale() === 'en')
        <script src="{{ asset('js/quote-api.js') }}" defer></script>
    @endif
@endsection