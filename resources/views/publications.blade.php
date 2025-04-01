@extends('layouts.app')

@section('title', __('publications.page_title'))
@section('description', __('publications.page_description'))

@section('content')
<main class="flex-grow-1">
    <section id="video" class="text-center my-4">
        <h2>{{ __('publications.video_heading') }}</h2>
        <iframe width="811" height="232" src="https://www.youtube.com/embed/5K8SDzdNbsg"
            title="{{ __('publications.video_heading') }}"
            style="border: none;"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
        </iframe>
    </section>

    <section class="container my-4">
        <h1>{{ __('publications.section_heading') }}</h1>
        <ul class="list-unstyled">
            <!-- Keep existing static content -->
            <li>
                Neha Yadav; Ankita Leekha; Rashim Bawa; Parveen Gahlyan; Mamta Bhandari;
                <strong>Ritu Arora</strong>; Anita K Verma; Rita Kakkar; Rakesh Kumar, 2020,
                <a href="link-to-publication-1" target="_blank" rel="noopener noreferrer">
                    <em>Novel 1-triazolylpyranopyrazoles as highly potent anticancer & promising antibacterial agents obtained via MW-assisted synthesis</em>
                </a>. (Communicated to ChemistrySelect)
            </li>
            <li>
                Ruchi Jain, Praveen Gahlyan, Sonam Dwiwedi, Rituraj Konwar, Sudhir Kumar, Mamta Bhandari,
                <strong>Ritu Arora</strong>, Rita Kakkar, Rakesh Kumar & Ashok Prasad, 2018,
                <a href="link-to-publication-2" target="_blank" rel="noopener noreferrer">
                    <em>Design, Synthesis and Evaluation of 1 H -1,2,3-Triazol-4-yl-methyl Tethered 3-Pyrrolylisatins as Potent Anti-Breast Cancer Agents</em>
                </a>, ChemistrySelect, Vol. 3, Pages 5263-5268.
            </li>
            <li>
                <strong>Ritu Arora</strong>, Kriti Kashyap & Rita Kakkar, 2018,
                <a href="link-to-publication-3" target="_blank" rel="noopener noreferrer">
                    <em>Rearrangements in radical cations of diazoketones: A DFT mechanistic study</em>
                </a>, Computational and Theoretical Chemistry, Vol. 1134, Pages 30-36.
            </li>
            <li>
                <strong>Ritu Arora</strong>, Kriti Kashyap, Anshika Mittal & Rita Kakkar, 2018,
                <a href="link-to-publication-4" target="_blank" rel="noopener noreferrer">
                    <em>Synthesis and reactions of diazoketones</em>
                </a>, Organic Preparations and Procedures International. (Accepted)
            </li>
        </ul>

        <button class="btn btn-primary toggleButton" data-bs-toggle="collapse" data-bs-target="#additional-publications">
            {{ __('publications.toggle_button_show') }}
        </button>

        <div id="additional-publications" class="collapse mt-4">
            <h2>{{ __('publications.additional_heading') }}</h2>
            <ul class="list-unstyled">
                <!-- Keep existing static content -->
                <li>
                    Rakesh Kumar, Neha Yadav, Rodolfo Lavilla, Daniel Blasi, Jordi Quintana, José Manuel Brea,
                    María Isabel Loza, Mamta Bhandari, <strong>Ritu Arora</strong>, Rita Kakkar & Ashok K. Prasad, 2017,
                    <a href="link-to-publication-5" target="_blank" rel="noopener noreferrer">
                        <em>Synthesis, pharmacological evaluation and molecular docking of pyranopyrazole linked 1,4-dihydropyridines as potent positive inotropes</em>
                    </a>, Molecular Diversity.
                </li>
                <li>
                    <strong>Ritu Arora</strong> & Rita Kakkar, 2017,
                    <a href="link-to-publication-6" target="_blank" rel="noopener noreferrer">
                        <em>Negative ion Wolff rearrangement of some diazoketones: A theoretical mechanistic study</em>
                    </a>, Computational and Theoretical Chemistry, Vol. 1106, Pages 50-57.
                </li>
                <li>
                    Rita Kakkar, <strong>Ritu Arora</strong> & Sheza Zaidi, 2017,
                    <a href="link-to-publication-7" target="_blank" rel="noopener noreferrer">
                        <em>DFT Studies on the acid catalyzed Curtius reaction: The Schmidt reaction</em>
                    </a>, Structural Chemistry, Vol. 28, Pages 1743-1756.
                </li>
                <li>
                    <strong>Ritu Arora</strong> & Rita Kakkar, 2016,
                    <a href="link-to-publication-8" target="_blank" rel="noopener noreferrer">
                        <em>Theoretical study of the mechanism of the Wolff rearrangement of some diazocarbonyl compounds</em>
                    </a>, Computational and Theoretical Chemistry, Vol. 1094, Pages 32-41.
                </li>
                <li>
                    <strong>Ritu Arora</strong>, Anshika Mittal & Rita Kakkar, 2015,
                    <a href="link-to-publication-9" target="_blank" rel="noopener noreferrer">
                        <em>Alzheimer's disease: Recent advances</em>
                    </a>, Journal of Biochemistry and Molecular Biology Research, Vol. 1, Pages 87-104.
                </li>
                <li>
                    Esha Kohli, <strong>Ritu Arora</strong> & Rita Kakkar, 2014,
                    <a href="link-to-publication-10" target="_blank" rel="noopener noreferrer">
                        <em>Theoretical study of the stability of tautomers and conformers of isatin-3-thiosemicarbazone (IBT)</em>
                    </a>, Canadian Chemical Transactions, Vol. 2, Pages 327-342.
                </li>
            </ul>
        </div>
    </section>
</main>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.querySelector('.toggleButton');
            const collapseEl = document.getElementById('additional-publications');

            toggleButton?.addEventListener('click', () => {
                const isVisible = collapseEl.classList.contains('show');
                toggleButton.innerText = isVisible ? '{{ __('publications.toggle_button_show') }}' : '{{ __('publications.toggle_button_hide') }}';

                collapseEl.addEventListener('shown.bs.collapse', () => {
                    toggleButton.innerText = '{{ __('publications.toggle_button_hide') }}';
                });

                collapseEl.addEventListener('hidden.bs.collapse', () => {
                    toggleButton.innerText = '{{ __('publications.toggle_button_show') }}';
                });
            });
        });
    </script>
@endsection
