<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $profile['name'] }} | {{ $profile['headline'] }}</title>
    <meta name="description" content="Backend developer portfolio focused on Laravel, Symfony, API integrations, and architecture-driven delivery.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $profile['name'] }} | {{ $profile['headline'] }}">
    <meta property="og:description" content="Premium backend developer portfolio showcasing professional experience, case studies, and project impact.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $profile['name'] }} Portfolio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $profile['name'] }} | {{ $profile['headline'] }}">
    <meta name="twitter:description" content="Laravel and Symfony backend portfolio with business-driven case studies.">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <script type="application/ld+json">
        {!! Js::from([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $profile['name'],
            'jobTitle' => $profile['title'],
            'description' => $profile['description'],
            'url' => url('/'),
            'sameAs' => array_values(array_map(fn ($item) => $item['url'], $socialLinks)),
            'knowsAbout' => collect($skills)->flatten()->values()->all(),
            'worksFor' => [
                '@type' => 'Organization',
                'name' => 'Freelance / Agency',
            ],
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
    </script>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-violet-500 focus:px-3 focus:py-2 focus:text-slate-950">Skip to content</a>

    <header class="sticky top-0 z-40 border-b border-slate-800/80 bg-slate-950/90 backdrop-blur">
        <nav class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-4 sm:px-8 lg:px-12" aria-label="Main navigation">
            <a href="#hero" class="text-sm font-semibold tracking-[0.2em] text-violet-300">PAUL SERRANO</a>

            <button
                type="button"
                class="inline-flex rounded-lg border border-slate-700 p-2 text-slate-100 lg:hidden"
                data-mobile-toggle
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <span class="sr-only">Toggle menu</span>
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round" />
                </svg>
            </button>

            <ul class="hidden items-center gap-7 text-sm text-slate-300 lg:flex">
                <li><a href="#about" data-nav-link class="nav-link">About</a></li>
                <li><a href="#experience" data-nav-link class="nav-link">Experience</a></li>
                <li><a href="#projects" data-nav-link class="nav-link">Projects</a></li>
                <li><a href="#skills" data-nav-link class="nav-link">Skills</a></li>
                <li><a href="#contact" data-nav-link class="nav-link">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu" class="hidden border-t border-slate-800 px-6 py-4 sm:px-8 lg:hidden">
            <ul class="space-y-3 text-sm text-slate-300">
                <li><a href="#about" data-nav-link class="nav-link block">About</a></li>
                <li><a href="#experience" data-nav-link class="nav-link block">Experience</a></li>
                <li><a href="#projects" data-nav-link class="nav-link block">Projects</a></li>
                <li><a href="#skills" data-nav-link class="nav-link block">Skills</a></li>
                <li><a href="#contact" data-nav-link class="nav-link block">Contact</a></li>
            </ul>
        </div>
    </header>

    <main id="main-content">
        <x-section-container id="hero" class="min-h-[calc(100vh-74px)] flex items-center">
            <div class="grid w-full gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                <div>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.22em] text-violet-300">Backend Developer Portfolio</p>
                    <h1 class="text-balance text-4xl font-semibold leading-tight text-slate-50 sm:text-5xl lg:text-6xl">
                        {{ $profile['headline'] }}
                    </h1>
                    <p class="mt-5 max-w-2xl text-pretty text-lg leading-relaxed text-slate-300">{{ $profile['description'] }}</p>
                    <p class="mt-4 max-w-2xl text-base text-slate-400">{{ $profile['intro'] }}</p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <x-cta-button href="#projects">View Projects</x-cta-button>
                        <x-cta-button :href="$profile['resume_url']" variant="secondary">Download Resume</x-cta-button>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-6 text-sm text-slate-400">
                        <p><span class="text-slate-200">Name:</span> {{ $profile['name'] }}</p>
                        <p><span class="text-slate-200">Role:</span> {{ $profile['title'] }}</p>
                        <p><span class="text-slate-200">Location:</span> {{ $profile['location'] }}</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="pointer-events-none absolute -inset-6 rounded-3xl bg-[radial-gradient(circle_at_30%_30%,rgba(139,92,246,0.25),transparent_55%),radial-gradient(circle_at_75%_70%,rgba(14,165,233,0.18),transparent_50%)]"></div>
                    <div class="relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/80 p-6 shadow-2xl shadow-violet-950/20">
                        <div class="mb-4 flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                            <p class="ml-3 font-mono text-xs text-slate-400">terminal://paul-serrano</p>
                        </div>
                        <pre class="terminal-code overflow-x-auto text-xs leading-6 text-slate-200"><code>$ php artisan portfolio:impact
• Domain-focused backend architecture
• API integrations (Stripe / FedEx)
• Dockerized delivery workflow
• Production deployment on Render

$ cat mindset.txt
"Build for maintainability first,
then optimize with product context."</code></pre>
                    </div>
                </div>
            </div>
        </x-section-container>

        <x-section-container id="about" class="reveal">
            <x-section-title
                eyebrow="About"
                title="Architecture-minded developer with product ownership"
                :description="$about['summary']"
            />

            <div class="mt-10 grid gap-4 md:grid-cols-2">
                @foreach ($about['highlights'] as $highlight)
                    <article class="rounded-xl border border-slate-800 bg-slate-900/70 p-4 text-sm text-slate-300">
                        {{ $highlight }}
                    </article>
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="experience" class="reveal">
            <x-section-title
                eyebrow="Experience"
                title="Professional timeline"
                description="Freelance and agency background across Laravel, Symfony, e-commerce, and business workflow automation."
            />

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @foreach ($experiences as $experience)
                    <x-experience-card :experience="$experience" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="projects" class="reveal">
            <x-section-title
                eyebrow="Featured Projects"
                title="Professional and personal work with real-world impact"
                description="Projects focused on business value, strong technical foundations, and production readiness."
            />

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @foreach ($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="case-studies" class="reveal">
            <x-section-title
                eyebrow="Case Studies"
                title="Business challenge to technical outcome"
                description="Each case study demonstrates product thinking, architecture decisions, and measurable delivery impact."
            />

            <div class="mt-10 space-y-6">
                @foreach ($caseStudies as $caseStudy)
                    <article class="rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
                        <h3 class="text-2xl font-semibold text-slate-100">{{ $caseStudy['title'] }}</h3>
                        <div class="mt-4 grid gap-4 md:grid-cols-2">
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">Problem</h4>
                                <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ $caseStudy['problem'] }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">Solution</h4>
                                <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ $caseStudy['solution'] }}</p>
                            </div>
                        </div>

                        <div class="mt-5 grid gap-5 md:grid-cols-2">
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">Architecture</h4>
                                <ul class="mt-2 space-y-2 text-sm text-slate-300">
                                    @foreach ($caseStudy['architecture'] as $architecturePoint)
                                        <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-300"></span>{{ $architecturePoint }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">Result</h4>
                                <ul class="mt-2 space-y-2 text-sm text-slate-300">
                                    @foreach ($caseStudy['result'] as $result)
                                        <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-300"></span>{{ $result }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="skills" class="reveal">
            <x-section-title
                eyebrow="Technical Stack"
                title="Tools, frameworks, and practices"
                description="Backend-first technology stack with modern frontend integration and delivery-focused DevOps practices."
            />

            <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($skills as $category => $items)
                    <article class="rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
                        <h3 class="text-lg font-semibold text-slate-100">{{ $category }}</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($items as $item)
                                <x-skill-badge :skill="$item" />
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="statistics" class="reveal">
            <x-section-title
                eyebrow="Statistics"
                title="Proven professional track record"
                description="A concise overview of delivery consistency, specialization, and practical engineering experience."
            />

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($statistics as $stat)
                    <x-statistic-card :stat="$stat" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="contact" class="reveal">
            <x-section-title
                eyebrow="Contact"
                title="Let's build something great together"
                description="Open to freelance opportunities, backend engineering roles, and architecture-focused collaborations."
            />

            <div class="mt-10 grid gap-8 lg:grid-cols-[0.45fr_0.55fr]">
                <div class="space-y-5 rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
                    <p class="text-sm text-slate-300"><span class="font-semibold text-slate-100">Email:</span> <a class="text-violet-300 hover:text-violet-200" href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                    @foreach ($socialLinks as $social)
                        <p class="text-sm text-slate-300"><span class="font-semibold text-slate-100">{{ $social['label'] }}:</span> <a class="text-violet-300 hover:text-violet-200" href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer">{{ $social['url'] }}</a></p>
                    @endforeach
                </div>

                <livewire:contact-form />
            </div>
        </x-section-container>
    </main>

    <footer class="border-t border-slate-800/80 py-8">
        <div class="mx-auto flex w-full max-w-7xl flex-wrap items-center justify-between gap-3 px-6 text-xs text-slate-400 sm:px-8 lg:px-12">
            <p>© {{ now()->year }} {{ $profile['name'] }}. Built with Laravel, Blade, Livewire, and Tailwind CSS.</p>
            <a href="{{ route('sitemap') }}" class="hover:text-slate-200">Sitemap</a>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
