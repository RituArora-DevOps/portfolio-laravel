@extends('layouts.app')

@section('title', __('projects.page_title'))
@section('description', __('projects.page_description'))

@section('content')
    <main class="flex-grow-1 container py-5">
        <section id="projects">
            <h1 class="mb-4">{{ __('projects.heading') }}</h1>

            <h2>{{ __('projects.fullstack_heading') }}</h2>
            <div class="row">
                @include('partials.project-card', [
                    'image' => 'project-portfolio3.PNG',
                    'title' => __('projects.personal_portfolio.title'),
                    'desc' => __('projects.personal_portfolio.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-inventory.jpg',
                    'title' => __('projects.inventory.title'),
                    'desc' => __('projects.inventory.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-mysql.jpg',
                    'title' => __('projects.mysql.title'),
                    'desc' => __('projects.mysql.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-recipe.PNG',
                    'title' => __('projects.recipe.title'),
                    'desc' => __('projects.recipe.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-task.jpg',
                    'title' => __('projects.task.title'),
                    'desc' => __('projects.task.desc')
                ])
            </div>

            <h2 class="mt-5">{{ __('projects.devops_heading') }}</h2>
            <div class="row">
                @include('partials.project-card', [
                    'image' => 'project-jenkins.jpg',
                    'title' =>
                        __('projects.jenkins.title'),
                    'desc' => __('projects.jenkins.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'Project-docker.jpg',
                    'title' => __('projects.docker.title'),
                    'desc' => __('projects.docker.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-aws.jpg',
                    'title' => __('projects.aws.title'),
                    'desc'
                    => __('projects.aws.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-prometheus.jpg',
                    'title' =>
                        __('projects.prometheus.title'),
                    'desc' => __('projects.prometheus.desc')
                ])
                @include('partials.project-card', [
                    'image' => 'project-k8s.jpg',
                    'title' => __('projects.k8s.title'),
                    'desc'
                    => __('projects.k8s.desc')
                ])
                </div>
        </se    ction>

        <sec    tion id="feedback" class="mt-5">
                <h2>{{ __('projects.feedback_heading') }}</h2>
                <p>{{ __('projects.feedback_text') }}</p>
            <form id="feedbackForm">
                    <div class="mb-3">
                        <label for="userFeedback" class="form-label">{{ __('projects.feedback_comment_label') }}</label>
                        <textarea id="userFeedback" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">{{ __('projects.feedback_comment_invalid') }}</div>
                    </div>
                <div class="mb-3">
                    <label class="form-label">{{ __('projects.feedback_rating_label') }}</label>
                    <select id="rating" class="form-select" required>
                        <option value="" selected disabled>{{ __('projects.feedback_rating_select') }}</option>
                        <option value="5">⭐⭐⭐⭐⭐ - {{ __('projects.rating_5') }}</option>
                        <option value="4">⭐⭐⭐⭐ - {{ __('projects.rating_4') }}</option>
                        <option value="3">⭐⭐⭐ - {{ __('projects.rating_3') }}</option>
                        <option value="2">⭐⭐ - {{ __('projects.rating_2') }}</option>
                        <option value="1">⭐ - {{ __('projects.rating_1') }}</option>
                    </select>
                    <div class="invalid-feedback">{{ __('projects.feedback_rating_invalid') }}</div>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('projects.feedback_submit') }}</button>
            </form>
            <h3 class="mt-4">{{ __('projects.recent_feedback') }}</h3>
            <ul id="feedbackList" class="list-group"></ul>
        </section>
        </ma in>
@endsection

    @section('scripts')
        <script src="{{ asset('js/interactive.js') }}" defer></script>
        <script src="{{ asset('js/form-validation.js') }}" defer></script>
    @endsection

    @push('styles')
        <style>
        .project {
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            background-color: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .project img {
            max-height: 120px;
            object-fit: cover;
            transform: scale(1.05);
        }
        </style>
    @endpush