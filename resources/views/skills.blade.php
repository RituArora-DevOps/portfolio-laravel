@extends('layouts.app')

@section('title', __('skills.page_title'))
@section('description', __('skills.description'))

@section('content')
    <main class="flex-grow-1 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <h1 class="display-5 mb-4 text-center">{{ __('skills.heading') }}</h1>

                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5">{{ __('skills.technical_heading') }}</h2>

                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                @foreach(__('skills.technical_list') as $category => $tools)
                                    <div class="col">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $category }}</h5>
                                                <p class="card-text">{{ $tools }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h5">{{ __('skills.soft_heading') }}</h2>
                            <ul class="list-unstyled">
                                @foreach(__('skills.soft_list') as $item)
                                    <li class="mb-2"> {{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
    <script src="{{ asset('js/skills-table.js') }}" defer></script>
@endsection