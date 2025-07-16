@extends('layouts.app')

@section('title', __('projects.page_title'))
@section('description', __('projects.page_description'))

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-center">{{ __('projects.heading') }}</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach(__('projects.projects_list') as $project)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                            <p><strong>Tech Stack:</strong> {{ $project['tech'] }}</p>
                            <div class="mt-auto pt-3">
                                @if(!empty($project['github']))
                                    <a href="{{ $project['github'] }}" target="_blank"
                                        class="btn btn-sm btn-outline-dark me-2 mb-2">GitHub</a>
                                @endif
                                @if(!empty($project['live']))
                                    <a href="{{ $project['live'] }}" target="_blank"
                                        class="btn btn-sm btn-outline-success me-2 mb-2">Live</a>
                                @endif
                                @if(!empty($project['ppt']))
                                    <a href="{{ $project['ppt'] }}" target="_blank"
                                        class="btn btn-sm btn-outline-primary me-2 mb-2">Slides</a>
                                @endif
                                @if(!empty($project['demo']))
                                    <a href="{{ $project['demo'] }}" target="_blank"
                                        class="btn btn-sm btn-outline-danger mb-2">Demo</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection