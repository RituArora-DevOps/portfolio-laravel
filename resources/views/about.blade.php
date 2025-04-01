@extends('layouts.app')

@section('title', __('about.page_title'))
@section('description', __('about.description'))

@section('content')
<main class="flex-grow-1">
    <section id="biography" class="container my-4">
        <h1>{{ __('about.biography_heading') }}</h1>
        <p>{{ __('about.biography_text') }}</p>
    </section>

    <section id="career-highlights" class="container my-4">
        <h1>{{ __('about.career_heading') }}</h1>
        <ul>
            @foreach(__('about.career_items') as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>

    <section id="quote-of-the-day" class="container my-4">
        <h2>{{ __('about.quote_heading') }}</h2>
        <blockquote id="quote-text"></blockquote>
        <footer id="quote-author"></footer>
    </section>
</main>
@endsection

@section('scripts')
    <script src="{{ asset('js/quote-api.js') }}" defer></script>
@endsection
