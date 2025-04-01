@extends('layouts.app')

@section('title', __('skills.page_title'))
@section('description', __('skills.description'))

@section('content')
<main class="flex-grow-1">
    <section id="skills" class="container my-4">
        <h1 class="mb-4">{{ __('skills.heading') }}</h1>

        <article class="mb-5">
            <h2>{{ __('skills.technical_heading') }}</h2>
            <ul class="list-unstyled">
                @foreach(__('skills.technical_list') as $item)
                    <li><strong>{{ $item }}</strong></li>
                @endforeach
            </ul>
            <p>{{ __('skills.technical_note') }}</p>
        </article>

        <article>
            <h2>{{ __('skills.soft_heading') }}</h2>
            <ul class="list-unstyled">
                @foreach(__('skills.soft_list') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p>{{ __('skills.soft_note') }}</p>
        </article>

        <button id="checkProficiencyBtn" class="btn btn-primary">{{ __('skills.check_proficiency') }}</button>

        <article>
            <h2>{{ __('skills.table_heading') }}</h2>
            <table id="skillsTable" class="table table-bordered">
                <thead>
                    <tr>
                        @foreach(__('skills.table_columns') as $col)
                            <th>{{ $col }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic rows will be inserted here -->
                </tbody>
            </table>

            <!-- Form to Add New Skill -->
            <form id="addSkillForm">
                <input type="text" id="skillName" placeholder="{{ __('skills.form_placeholders.0') }}" required>
                <input type="text" id="proficiencyLevel" placeholder="{{ __('skills.form_placeholders.1') }}" required>
                <input type="text" id="tools" placeholder="{{ __('skills.form_placeholders.2') }}" required>
                <button type="submit">{{ __('skills.form_button') }}</button>
            </form>
        </article>
    </section>
</main>
@endsection

@section('scripts')
    <script src="{{ asset('js/skills-table.js') }}" defer></script>
@endsection
