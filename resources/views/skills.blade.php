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

                            @php
                                $iconMap = [
                                    'Languages' => 'bi-code-slash',
                                    'Backend' => 'bi-hdd-network',
                                    'Frontend' => 'bi-window',
                                    'Databases' => 'bi-database',
                                    'DevSecOps Tools' => 'bi-shield-lock',
                                    'Cloud Services' => 'bi-cloud-upload',
                                    'Deployment & Hosting' => 'bi-upload',
                                    'Other Tools & Concepts' => 'bi-tools',

                                    // French equivalents
                                    'Langages' => 'bi-code-slash',
                                    'Bases de données' => 'bi-database',
                                    'Outils DevSecOps' => 'bi-shield-lock',
                                    'Services cloud' => 'bi-cloud-upload',
                                    'Déploiement & hébergement' => 'bi-upload',
                                    'Autres outils & concepts' => 'bi-tools',
                                ];
                            @endphp

                            @foreach(__('skills.technical_list') as $category => $tools)
                                <div class="mb-3">
                                    <h5>
                                        @if(isset($iconMap[$category]))
                                            <i class="bi {{ $iconMap[$category] }} me-2"></i>
                                        @endif
                                        {{ $category }}
                                    </h5>
                                    <p class="mb-1">{{ $tools }}</p>
                                </div>
                            @endforeach
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