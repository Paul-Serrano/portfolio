<?php

return [

    'profile' => [
        'name' => 'Paul Serrano',
        'title' => 'Backend Developer',
        'headline' => 'Backend Developer specialized in Laravel & Symfony',
        'description' => 'I build scalable, maintainable and business-oriented web applications.',
        'location' => 'France',
        'email' => 'contact@example.com',
    ],

    'socials' => [
        'github' => 'https://github.com/Paul-Serrano',
        'linkedin' => 'https://www.linkedin.com/in/serrano-paul/',
    ],

    'statistics' => [
        [
            'label' => 'Years Experience',
            'value' => '4+',
        ],
        [
            'label' => 'Projects Delivered',
            'value' => '10+',
        ],
    ],

    'skills' => [
        'backend' => [
            'PHP',
            'Laravel',
            'Symfony',
        ],
        'database' => [
            'PostgreSQL',
            'MySQL',
        ],
        'frontend' => [
            'Livewire',
            'Tailwind CSS',
            'Blade',
            'MaryUI',
        ],
        'devops' => [
            'Docker',
            'Git',
            'Linux',
        ],
        'architecture' => [
            'SOLID',
            'DDD',
            'Hexagonal Architecture',
            'API Design',
        ],
        'cms' => [
            'Prestashop',
            'WordPress',
        ],
        'apis' => [
            'FedEx Ship API',
            'FedEx Track API',
            'FedEx Pickup API', 
            'FedEx Rate API',
            'Stripe',
            'football-data.org API',
        ],
    ],

    'experiences' => [
        [
            'company' => 'Service Vin',
            'type' => 'Freelance',
            'role' => 'Backend Developer',
            'period' => '2024 - Present',
            'summary' => 'Development of an internal business application focused on order management and logistics.',
            'technologies' => [
                'Laravel',
                'Livewire',
                'Tailwind CSS',
                'MaryUI',
                'PostgreSQL',
                'Docker',
                'Plesk',
            ],
            'apis' => [
                'Stripe',
                'FedEx Ship API',
                'FedEx Track API',
                'FedEx Pickup API',
                'FedEx Rate API',
            ],
            'achievements' => [
                'Integrated Stripe payments',
                'Integrated FedEx shipping workflow',
                'Automated business processes',
                'Improved logistics operations',
            ],
        ],

        [
            'company' => 'Reflectiv',
            'type' => 'Employee',
            'role' => 'Symfony Developer',
            'period' => '2023 - 2024',
            'summary' => 'Development and maintenance of Symfony and Prestashop applications.',
            'technologies' => [
                'Symfony',
                'Prestashop',
                'PHP',
                'MySQL',
            ],
            'achievements' => [
                'Implemented Hexagonal Architecture',
                'Improved maintainability',
                'Developed custom business features',
            ],
        ],

        [
            'company' => 'WebForMe',
            'type' => 'Employee',
            'role' => 'Prestashop Developer',
            'period' => '2022 - 2023',
            'summary' => 'Development and maintenance of Prestashop stores.',
            'technologies' => [
                'Symfony',
                'Prestashop',
                'PHP',
                'MySQL',
            ],
            'achievements' => [
                'Developed custom Prestashop modules',
                'Optimized store performance',
                'Improved user experience',
            ],
        ],

        [
            'company' => 'Paris Island',
            'type' => 'Freelance',
            'role' => 'WordPress Developer',
            'period' => '2020',
            'summary' => 'Development and maintenance of a WordPress site.',
            'technologies' => [
                'WordPress',
                'PHP',
                'MySQL',
            ],
            'achievements' => [
                'Developed custom WordPress modules',
                'Optimized site performance',
                'Improved user experience',
            ],
        ],

    ],


    'projects' => [
        [
            'slug' => 'akkezxla-cdm-2026',
            'name' => 'Akkezxla CDM 2026',
            'type' => 'Personal Project',
            'description' => 'World Cup 2026 prediction platform built with Laravel.',
            'technologies' => [
                'Laravel',
                'PostgreSQL',
                'Docker',
                'Tailwind CSS',
            ],
            'github' => 'https://github.com/Paul-Serrano/akkezxla-cdm-2026',
            'demo' => 'https://akkezxla-cdm-2026.onrender.com/',
            'featured' => true,
            'highlights' => [
                'Dockerized infrastructure',
                'Render deployment',
                'Football-Data.org integration',
                'Responsive UI',
            ],
        ],
    ],

    'case_studies' => [
        [
            'slug' => 'service-vin',
            'title' => 'Service Vin - Logistics & Payment Automation',
            'problem' => 'Manual logistics and payment workflows were time-consuming and error-prone.',
            'solution' => 'Developed a Laravel application integrating Stripe and multiple FedEx APIs.',
            'architecture' => [
                'Laravel',
                'PostgreSQL',
                'Docker',
                'External API integrations',
            ],
            'results' => [
                'Reduced manual operations',
                'Improved shipping workflow',
                'Centralized order management',
            ],
        ],

        [
            'slug' => 'akkezxla-cdm-2026',
            'title' => 'World Cup Prediction Platform',
            'problem' => 'Need for a platform allowing users to track and predict World Cup results.',
            'solution' => 'Built a Laravel application consuming football-data.org APIs.',
            'architecture' => [
                'Laravel',
                'Docker',
                'API-first approach',
                'Responsive design',
            ],
            'results' => [
                'Production deployment on Render',
                'Full end-to-end ownership',
                'Modern Laravel architecture',
            ],
        ],
    ],
];