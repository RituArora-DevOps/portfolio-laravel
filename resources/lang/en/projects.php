<?php

return [
    'page_title' => 'Projects',
    'page_description' => 'Explore real-world full stack and DevOps projects built using modern technologies.',
    'heading' => 'Projects',


    'projects_list' => [
        'car_rental' => [
            'title' => 'Car Rental Management System',
            'description' => 'A full-featured web app for booking and managing car rentals with user authentication, vehicle listings, and admin controls.',
            'tech' => 'Node.js, Express.js, MySQL, Bootstrap, Render',
            'github' => 'https://github.com/RituArora-DevOps/RentnDrive',
            'demo' => 'https://www.youtube.com/watch?v=VGSBVmFnqrc',
            'live' => 'https://carrentalmanagement.onrender.com',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/CarRentalSystem-final.pdf',
            'images' => [
                'projects/car_rental/1.PNG',
                'projects/car_rental/2.PNG',
                'projects/car_rental/3.PNG',
                'projects/car_rental/4.PNG',
            ],
        ],
        'daycare' => [
            'title' => 'Day Care Management System',
            'description' => 'Secure multi-user platform to manage children’s profiles, educator dashboards, and class assignments.',
            'tech' => 'Slim 4, MeekroDB, Twig, Bootstrap, MySQL, Monolog, AWS EC2',
            'github' => 'https://github.com/FYFYBai/DayCare_Team4',
            'live' => 'https://daycare-management.42web.io/',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/Team4-DayCareSystemManagement.pdf',
            'images' => [
                'projects/day_care/1.PNG',
                'projects/day_care/2.PNG',
                'projects/day_care/3.PNG',
                'projects/day_care/4.PNG',
                'projects/day_care/5.PNG',
                'projects/day_care/6.PNG',
                'projects/day_care/7.PNG',
            ],
        ],
        'portfolio' => [
            'title' => 'Personal Portfolio Website',
            'description' => 'Responsive portfolio built with Laravel to showcase projects, skills, and achievements, with localization and accessibility.',
            'tech' => 'Laravel, Blade, SCSS, Bootstrap, JavaScript, Render',
            'github' => 'https://github.com/RituArora-DevOps/portfolio-laravel',
            'live' => 'https://laravel-resume.onrender.com/en',
            'images' => [
                'projects/portfolio/1.PNG',
            ],
        ],
        'movie_explorer' => [
            'title' => 'Movie Explorer Web App',
            'description' => 'Server-side rendered movie app with search, filters, favorites, Google OAuth, and TMDB API integration.',
            'tech' => 'Next.js, React, MongoDB, NextAuth, TMDB API, Tailwind CSS, Vercel',
            'github' => 'https://github.com/RIDagher/movie-explorer-next',
            'live' => 'https://movie-explorer-next-re3c.vercel.app',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/Movie%20Explorer.pdf',
            'images' => [
                'projects/movie_explorer/1.PNG',
                'projects/movie_explorer/2.PNG',
                'projects/movie_explorer/3.PNG',
                'projects/movie_explorer/4.PNG',
                'projects/movie_explorer/5.PNG',
            ],
        ],
        'online_store' => [
            'title' => 'Online Store System',
            'description' => 'JavaFX shopping app with Spring Boot REST API, product browsing, cart, orders, reviews, and payments using design patterns.',
            'tech' => 'JavaFX, Spring Boot, REST API, PostgreSQL/MySQL, JPA, Maven, Docker',
            'github' => 'https://github.com/RituArora-DevOps/online-store-system-postgres-v2',
            'ppt' => 'https://rituarora-devops.github.io/projects-presentation/SpringBootnJavaFXML.pdf',
            // 'images' => [
            //     'projects/online_store/1.PNG',
            //     'projects/online_store/2.PNG',
            //     'projects/online_store/3.PNG',
            //     'projects/online_store/4.PNG',
            // ],
        ],
    ],
];