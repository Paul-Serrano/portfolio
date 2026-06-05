<?php

return [
    'profile' => [
        'name' => 'Paul Serrano',
        'title' => 'Backend Developer',
        'headline' => 'Backend Developer specialized in Laravel & Symfony',
        'description' => 'I build scalable, maintainable and business-oriented web applications.',
        'intro' => 'Backend engineer focused on clean architecture, API integrations, and shipping reliable products from concept to production.',
        'location' => 'France',
        'email' => 'paul.serrano08374@gmail.com',
        'phone' => '+33 6 24 23 24 27',
        'resume_url' => '#',
    ],

    'about' => [
        'summary' => 'I am a backend developer with 4+ years of PHP experience across freelance missions and agency teams. I specialize in Laravel and Symfony ecosystems, integrating external APIs, improving business workflows, and delivering maintainable software with architectural rigor.',
        'highlights' => [
            '4+ years of PHP development',
            'Laravel and Symfony expertise',
            'PostgreSQL and data-heavy workflows',
            'Dockerized delivery and cloud deployment',
            'SOLID principles and Hexagonal Architecture',
            'Freelance product ownership',
        ],
    ],

    'experiences' => [
        [
            'company' => 'Service Vin',
            'type' => 'Freelance Mission',
            'role' => 'Backend Developer',
            'period' => '2024 - Present',
            'description' => 'Built and evolved an internal business application to centralize operations, automate logistics, and streamline payment processing.',
            'technologies' => [
                'Laravel',
                'PostgreSQL',
                'Stripe API',
                'FedEx API',
                'Docker',
            ],
            'achievements' => [
                'Integrated Stripe for payment handling and reconciliation',
                'Implemented FedEx shipping and tracking workflows',
                'Automated repetitive business operations',
                'Reduced manual data processing across teams',
            ],
        ],
        [
            'company' => 'Reflectiv',
            'type' => 'Employee',
            'role' => 'Symfony Developer',
            'period' => '2023 - 2024',
            'description' => 'Developed maintainable backend systems for e-commerce and internal products with an architecture-first approach.',
            'technologies' => [
                'Symfony',
                'Prestashop',
                'PHP',
                'PostgreSQL',
            ],
            'achievements' => [
                'Introduced Hexagonal Architecture principles',
                'Improved maintainability and testability of core modules',
                'Delivered custom e-commerce features with long-term support',
            ],
        ],
        [
            'company' => 'Agency Experience',
            'type' => 'Employee',
            'role' => 'PHP Web Developer',
            'period' => '2022 - 2023',
            'description' => 'Contributed to client-facing web applications with emphasis on reliability, delivery speed, and code quality.',
            'technologies' => [
                'PHP',
                'Web Development',
            ],
            'achievements' => [
                'Delivered production features for multiple client projects',
                'Maintained legacy and modern codebases in parallel',
                'Collaborated closely with design and product stakeholders',
            ],
        ],
        [
            'company' => 'Training & Bootcamp',
            'type' => 'Education',
            'role' => 'Backend Development Retraining',
            'period' => '2020 - 2021',
            'description' => 'Professional retraining focused on modern backend engineering, software fundamentals, and project delivery.',
            'technologies' => [
                'PHP',
                'Laravel',
                'Symfony',
            ],
            'achievements' => [
                'Built end-to-end backend projects',
                'Strengthened architecture and clean code practices',
                'Established a production-ready development workflow',
            ],
        ],
    ],
    'projects' => [
        [
            'slug' => 'service-vin-platform',
            'title' => 'Service Vin Internal Platform',
            'type' => 'Professional Project',
            'description' => 'Internal business application for operations, logistics, and payment workflows.',
            'technologies' => [
                'Laravel',
                'PostgreSQL',
                'Stripe API',
                'FedEx API',
                'Docker',
            ],
            'challenge' => 'Unify fragmented payment and shipping processes into one reliable system.',
            'outcome' => 'Automated repetitive operations and improved operational throughput.',
            'github' => null,
            'demo' => null,
            'featured' => true,
        ],
        [
            'slug' => 'akkezxla-cdm-2026',
            'title' => 'Akkezxla CDM 2026',
            'type' => 'Personal Project',
            'description' => 'Laravel platform for FIFA World Cup 2026 predictions and competition tracking.',
            'technologies' => [
                'Laravel',
                'PHP',
                'PostgreSQL',
                'Docker',
                'Tailwind CSS',
                'Render',
            ],
            'challenge' => 'Design and ship a production-ready sports prediction product as a solo builder.',
            'outcome' => 'Delivered an end-to-end application with cloud deployment and responsive UX.',
            'github' => 'https://github.com/Paul-Serrano/akkezxla-cdm-2026',
            'demo' => 'https://akkezxla-cdm-2026.onrender.com/',
            'featured' => true,
        ],
    ],
    'case_studies' => [
        [
            'slug' => 'service-vin',
            'title' => 'Service Vin: Logistics & Payment Automation',
            'problem' => 'The company relied on manual logistics and payment workflows that slowed execution and increased mistakes.',
            'solution' => 'Built a Laravel-based internal platform integrating Stripe and FedEx APIs with workflow automation.',
            'architecture' => [
                'Service-oriented modules around payments and shipping',
                'PostgreSQL-backed domain model for operational consistency',
                'Dockerized local and deployment workflow',
                'API integration boundaries for resilience and maintainability',
            ],
            'result' => [
                'Reduced manual operations and data handling effort',
                'Improved shipping visibility and process reliability',
                'Centralized order and logistics operations in a single system',
            ],
        ],
        [
            'slug' => 'reflectiv',
            'title' => 'Reflectiv: Architecture & Maintainability',
            'problem' => 'Multiple Symfony and Prestashop code paths were difficult to evolve safely.',
            'solution' => 'Introduced architecture-driven patterns and cleaner boundaries to improve maintainability.',
            'architecture' => [
                'Hexagonal architecture concepts for domain isolation',
                'Symfony service orchestration for core use-cases',
                'Modular customization approach for Prestashop',
                'Incremental refactoring strategy to avoid regressions',
            ],
            'result' => [
                'Improved maintainability and onboarding speed',
                'Lower change risk in critical backend areas',
                'Clearer technical foundations for future feature work',
            ],
        ],
    ],

    'skills' => [
        'Backend' => ['PHP', 'Laravel', 'Symfony'],
        'Database' => ['PostgreSQL', 'MySQL'],
        'Frontend' => ['Tailwind CSS', 'Livewire', 'React', 'Angular'],
        'DevOps' => ['Docker', 'Git', 'Linux'],
        'Architecture' => ['SOLID', 'DDD', 'Hexagonal Architecture', 'API Design'],
    ],

    'statistics' => [
        [
            'label' => 'Years Experience',
            'value' => 4,
            'suffix' => '+',
        ],
        [
            'label' => 'Projects Delivered',
            'value' => 10,
            'suffix' => '+',
        ],
        [
            'label' => 'Laravel Specialist',
            'value' => 100,
            'suffix' => '%',
        ],
        [
            'label' => 'Freelance & Agency Experience',
            'value' => 2,
            'suffix' => ' Tracks',
        ],
    ],

    'social_links' => [
        [
            'label' => 'GitHub',
            'url' => 'https://github.com/Paul-Serrano',
        ],
        [
            'label' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/serrano-paul/',
        ],
    ],
];