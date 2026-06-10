<?php

return [
    'profile' => [
        'name' => 'Paul Serrano',
        'title' => 'Developpeur Backend',
        'headline' => 'Developpeur Backend specialise Laravel & Symfony',
        'description' => 'Je construis des applications web scalables, maintenables et orientees business.',
        'intro' => 'Ingenieur backend axe sur l architecture propre, les integrations API et la livraison de produits fiables, de l idee a la production.',
        'location' => 'France',
        'email' => 'paul.serrano08374@gmail.com',
        'phone' => '+33 6 24 23 24 27',
        'resume_url' => '#',
    ],

    'about' => [
        'summary' => 'Je suis developpeur backend avec plus de 4 ans d experience PHP entre missions freelance et equipes en agence. Je me specialise sur les ecosystemes Laravel et Symfony, l integration d API externes, l optimisation de workflows metier et la livraison de logiciels maintenables avec une vraie rigueur architecture.',
        'highlights' => [
            '4+ ans de developpement PHP',
            'Expertise Laravel et Symfony',
            'PostgreSQL et workflows data intensifs',
            'Delivery dockerisee et deploiement cloud',
            'Principes SOLID et architecture hexagonale',
            'Ownership produit en freelance',
        ],
    ],

    'experiences' => [
        [
            'company' => 'Service Vin',
            'type' => 'Mission Freelance',
            'role' => 'Developpeur Backend',
            'period' => '2024 - Aujourd\'hui',
            'description' => 'Conception et evolution d\'une application interne pour centraliser les operations, automatiser la logistique et fluidifier le traitement des paiements.',
            'technologies' => [
                'Laravel',
                'PostgreSQL',
                'Stripe API',
                'FedEx API',
                'Docker',
            ],
            'achievements' => [
                'Integration Stripe pour le paiement et le rapprochement',
                'Mise en place des workflows d\'expedition et de suivi FedEx',
                'Automatisation des operations metier repetitives',
                'Reduction du traitement manuel des donnees entre equipes',
            ],
        ],
        [
            'company' => 'Reflectiv',
            'type' => 'Salarie',
            'role' => 'Developpeur Symfony',
            'period' => '2023 - 2024',
            'description' => 'Developpement de systemes backend maintenables pour l\'e-commerce et des produits internes avec une approche architecture-first.',
            'technologies' => [
                'Symfony',
                'Prestashop',
                'PHP',
                'PostgreSQL',
            ],
            'achievements' => [
                'Introduction des principes d\'architecture hexagonale',
                'Amelioration de la maintenabilite et de la testabilite des modules coeur',
                'Livraison de fonctionnalites e-commerce sur-mesure avec support long terme',
            ],
        ],
        [
            'company' => 'Experience Agence',
            'type' => 'Salarie',
            'role' => 'Developpeur Web PHP',
            'period' => '2022 - 2023',
            'description' => 'Contribution a des applications web client avec un focus sur la fiabilite, la vitesse de delivery et la qualite du code.',
            'technologies' => [
                'PHP',
                'Web Development',
            ],
            'achievements' => [
                'Livraison de fonctionnalites en production sur plusieurs projets clients',
                'Maintenance parallele de codebases legacy et modernes',
                'Collaboration rapprochee avec les equipes design et produit',
            ],
        ],
        [
            'company' => 'Formation & Bootcamp',
            'type' => 'Formation',
            'role' => 'Reconversion Developpement Backend',
            'period' => '2020 - 2021',
            'description' => 'Reconversion professionnelle orientee ingenierie backend moderne, fondamentaux logiciels et delivery projet.',
            'technologies' => [
                'PHP',
                'Laravel',
                'Symfony',
            ],
            'achievements' => [
                'Realisation de projets backend de bout en bout',
                'Consolidation des pratiques d\'architecture et clean code',
                'Mise en place d\'un workflow de developpement pret pour la production',
            ],
        ],
    ],

    'projects' => [
        [
            'slug' => 'service-vin-platform',
            'title' => 'Plateforme Interne Service Vin',
            'type' => 'Projet Professionnel',
            'description' => 'Application metier interne pour les operations, la logistique et les workflows de paiement.',
            'technologies' => [
                'Laravel',
                'PostgreSQL',
                'Stripe API',
                'FedEx API',
                'Docker',
            ],
            'challenge' => 'Unifier des processus paiement et livraison fragmentes dans un systeme fiable.',
            'outcome' => 'Automatisation des operations repetitives et amelioration du debit operationnel.',
            'github' => null,
            'demo' => null,
            'featured' => true,
        ],
        [
            'slug' => 'akkezxla-cdm-2026',
            'title' => 'Akkezxla CDM 2026',
            'type' => 'Projet Personnel',
            'description' => 'Plateforme Laravel de pronostics Coupe du Monde 2026 et suivi de competition.',
            'technologies' => [
                'Laravel',
                'PHP',
                'PostgreSQL',
                'Docker',
                'Tailwind CSS',
                'Render',
            ],
            'challenge' => 'Concevoir et livrer seul un produit de pronostics sportifs pret pour la production.',
            'outcome' => 'Livraison d\'une application end-to-end deployee dans le cloud avec UX responsive.',
            'github' => 'https://github.com/Paul-Serrano/akkezxla-cdm-2026',
            'demo' => 'https://akkezxla-cdm-2026.onrender.com/',
            'featured' => true,
        ],
    ],

    'case_studies' => [
        [
            'slug' => 'service-vin',
            'title' => 'Service Vin: Automatisation Logistique & Paiement',
            'problem' => 'L\'entreprise s\'appuyait sur des workflows logistiques et paiements manuels qui ralentissaient l\'execution et augmentaient les erreurs.',
            'solution' => 'Creation d\'une plateforme interne Laravel integree a Stripe et FedEx avec automatisation des workflows.',
            'architecture' => [
                'Modules orientes services autour des paiements et de la logistique',
                'Modele de domaine PostgreSQL pour une meilleure coherence operationnelle',
                'Workflow local et deploiement dockerises',
                'Frontieres d\'integration API pour la resilience et la maintenabilite',
            ],
            'result' => [
                'Reduction des operations manuelles et du traitement de donnees',
                'Amelioration de la visibilite logistique et de la fiabilite des processus',
                'Centralisation des operations commandes et logistique dans un seul systeme',
            ],
        ],
        [
            'slug' => 'reflectiv',
            'title' => 'Reflectiv: Architecture & Maintenabilite',
            'problem' => 'Plusieurs parcours de code Symfony et Prestashop etaient difficiles a faire evoluer sans risque.',
            'solution' => 'Introduction de patterns guides par l\'architecture et de frontieres plus propres pour ameliorer la maintenabilite.',
            'architecture' => [
                'Concepts d\'architecture hexagonale pour isoler le domaine',
                'Orchestration de services Symfony pour les use-cases centraux',
                'Approche modulaire de personnalisation Prestashop',
                'Strategie de refactor incremental pour eviter les regressions',
            ],
            'result' => [
                'Amelioration de la maintenabilite et de la vitesse d\'onboarding',
                'Reduction du risque de changement sur les zones backend critiques',
                'Fondations techniques plus claires pour les futures fonctionnalites',
            ],
        ],
    ],

    'skills' => [
        'Backend' => ['PHP', 'Laravel', 'Symfony'],
        'Base de donnees' => ['PostgreSQL', 'MySQL'],
        'Frontend' => ['Tailwind CSS', 'Livewire', 'React', 'Angular'],
        'DevOps' => ['Docker', 'Git', 'Linux'],
        'Architecture' => ['SOLID', 'DDD', 'Architecture Hexagonale', 'API Design'],
    ],

    'statistics' => [
        [
            'label' => 'Annees d\'experience',
            'value' => 4,
            'suffix' => '+',
        ],
        [
            'label' => 'Projets livres',
            'value' => 10,
            'suffix' => '+',
        ],
        [
            'label' => 'Specialiste Laravel',
            'value' => 100,
            'suffix' => '%',
        ],
        [
            'label' => 'Experience Freelance & Agence',
            'value' => 2,
            'suffix' => ' parcours',
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
