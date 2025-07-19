@extends('layouts.app')

@section('title', __('about.page_title'))
@section('description', __('about.description'))

@section('content')
    <main class="flex-grow-1 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <section id="biography" class="mb-5 text-center">
                        <h1 class="display-5 mb-3">{{ __('about.biography_heading') }}</h1>
                        <p class="lead">{{ __('about.biography_text') }}</p>
                    </section>

                    <section id="career-highlights" class="mb-5">
                        <h2 class="h4 mb-3">{{ __('about.career_heading') }}</h2>
                        <ul class="list-group">
                            @foreach(__('about.career_items') as $item)
                                <li class="list-group-item">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection