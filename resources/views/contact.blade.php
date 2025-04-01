@extends('layouts.app')

@section('title', __('contact.page_title'))

@section('content')
<main class="flex-fill">
    <section id="contact" class="container mt-5">
        <h1>{{ __('contact.heading') }}</h1>

        <form class="bg-light p-4 rounded shadow needs-validation" novalidate id="contactForm">
            <div class="mb-3">
                <label for="first-name" class="form-label">{{ __('contact.full_name') }}</label>
                <div class="input-group">
                    <input type="text" id="first-name" name="first-name" class="form-control" placeholder="{{ __('contact.first_name') }}" required>
                    <input type="text" id="last-name" name="last-name" class="form-control" placeholder="{{ __('contact.last_name') }}" required>
                    <div class="invalid-feedback">{{ __('contact.error_name') }}</div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('contact.email') }}</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">{{ __('contact.error_email') }}</div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">{{ __('contact.message') }}</label>
                <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                <div class="invalid-feedback">{{ __('contact.error_message') }}</div>
            </div>

            <button type="submit" class="btn btn-primary">{{ __('contact.submit') }}</button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">{{ __('contact.modal_title') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ __('contact.modal_body') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('contact.modal_close') }}</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='mailto:your-email@example.com'">{{ __('contact.modal_request') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
