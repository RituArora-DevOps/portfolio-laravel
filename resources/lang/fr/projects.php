<?php

return [
    'page_title' => 'Projets',
    'page_description' => 'Découvrez des projets Full Stack et DevOps réels développés avec des technologies modernes.',
    'heading' => 'Projets',

    'projects_list' => [
        'car_rental' => [
            'title' => 'Système de gestion de location de voitures',
            'description' => "Application web complète pour réserver et gérer des locations de voitures avec authentification, liste de véhicules et tableau de bord administrateur.",
            'tech' => 'Node.js, Express.js, MySQL, Bootstrap, Render',
            'github' => 'https://github.com/RituArora-DevOps/RentnDrive',
            'demo' => 'https://www.youtube.com/watch?v=VGSBVmFnqrc',
            'live' => 'https://carrentalmanagement.onrender.com',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/CarRentalSystem-final.pdf',
            'images' => [
                'projects/car_rental/1.png',
                'projects/car_rental/2.png',
                'projects/car_rental/3.png',
                'projects/car_rental/4.png',
            ],
        ],
        'daycare' => [
            'title' => 'Système de gestion de garderie',
            'description' => "Plateforme sécurisée multi-utilisateur pour gérer les profils des enfants, les tableaux de bord des éducateurs et les affectations de classes.",
            'tech' => 'Slim 4, MeekroDB, Twig, Bootstrap, MySQL, Monolog, AWS EC2',
            'github' => 'https://github.com/FYFYBai/DayCare_Team4',
            'live' => 'https://daycare-management.42web.io/',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/Team4-DayCareSystemManagement.pdf',
            'images' => [
                'projects/day_care/1.png',
                'projects/day_care/2.png',
                'projects/day_care/3.png',
                'projects/day_care/4.png',
                'projects/day_care/5.png',
                'projects/day_care/6.png',
                'projects/day_care/7.png',
            ],
        ],
        'portfolio' => [
            'title' => 'Site portfolio personnel',
            'description' => 'Portfolio réactif construit avec Laravel pour présenter les projets, compétences et réalisations, avec prise en charge de la localisation et de l’accessibilité.',
            'tech' => 'Laravel, Blade, SCSS, Bootstrap, JavaScript, Render',
            'github' => 'https://github.com/RituArora-DevOps/portfolio-laravel',
            'live' => 'https://laravel-resume.onrender.com/fr',
            'images' => [
                'projects/portfolio/1.PNG',
            ],
        ],
        'movie_explorer' => [
            'title' => 'Application web Movie Explorer',
            'description' => 'Application de films avec rendu côté serveur, recherche, filtres, favoris, connexion Google, et intégration de l’API TMDB.',
            'tech' => 'Next.js, React, MongoDB, NextAuth, TMDB API, Tailwind CSS, Vercel',
            'github' => 'https://github.com/RIDagher/movie-explorer-next',
            'live' => 'https://movie-explorer-next-re3c.vercel.app',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/Movie%20Explorer.pdf',
            'images' => [
                'projects/movie_explorer/1.png',
                'projects/movie_explorer/2.png',
                'projects/movie_explorer/3.png',
                'projects/movie_explorer/4.png',
                'projects/movie_explorer/5.png',
            ],
        ],
        'online_store' => [
            'title' => 'Système de boutique en ligne',
            'description' => 'Application JavaFX avec API REST Spring Boot pour la navigation, panier, commandes, avis, et paiements, utilisant des modèles de conception.',
            'tech' => 'JavaFX, Spring Boot, REST API, PostgreSQL/MySQL, JPA, Maven, Docker',
            'github' => 'https://github.com/RituArora-DevOps/online-store-system-postgres-v2',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/SpringBootnJavaFXML.pdf',
            'images' => [
                'projects/online_store/1.png',
                'projects/online_store/2.png',
                'projects/online_store/3.png',
                'projects/online_store/4.png',
                'projects/online_store/5.png',
                'projects/online_store/6.png',
            ],
        ],
    ],
];