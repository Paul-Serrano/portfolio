<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $profile['name'] }} | {{ $profile['headline'] }}</title>
    <meta name="description" content="{{ __('portfolio.meta.description') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $profile['name'] }} | {{ $profile['headline'] }}">
    <meta property="og:description" content="{{ __('portfolio.meta.og_description') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $profile['name'] }} Portfolio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $profile['name'] }} | {{ $profile['headline'] }}">
    <meta name="twitter:description" content="{{ __('portfolio.meta.twitter_description') }}">

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
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-violet-500 focus:px-3 focus:py-2 focus:text-slate-950">{{ __('portfolio.accessibility.skip_to_content') }}</a>

    <header class="sticky top-0 z-40 border-b border-slate-800/80 bg-slate-950/90 backdrop-blur">
        <nav class="mx-auto flex w-full max-w-7xl items-center justify-between px-6 py-4 sm:px-8 lg:px-12" aria-label="Main navigation">
            <div class="flex items-center gap-3">
                <a href="#hero" class="text-sm font-semibold tracking-[0.2em] text-violet-300">{{ strtoupper($profile['name']) }}</a>
                <div class="hidden items-center gap-2 sm:flex" aria-label="{{ __('portfolio.navigation.language_switcher') }}">
                    <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="rounded border px-2 py-1 text-xs transition {{ app()->getLocale() === 'en' ? 'border-violet-400 bg-violet-500/10 text-violet-200' : 'border-slate-700 text-slate-300 hover:border-slate-500' }}" aria-label="{{ __('portfolio.navigation.switch_to_english') }}">🇬🇧</a>
                    <a href="{{ route('locale.switch', ['locale' => 'fr']) }}" class="rounded border px-2 py-1 text-xs transition {{ app()->getLocale() === 'fr' ? 'border-violet-400 bg-violet-500/10 text-violet-200' : 'border-slate-700 text-slate-300 hover:border-slate-500' }}" aria-label="{{ __('portfolio.navigation.switch_to_french') }}">🇫🇷</a>
                </div>
            </div>

            <button
                type="button"
                class="inline-flex rounded-lg border border-slate-700 p-2 text-slate-100 lg:hidden"
                data-mobile-toggle
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <span class="sr-only">{{ __('portfolio.navigation.toggle_menu') }}</span>
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round" />
                </svg>
            </button>

            <ul class="hidden items-center gap-7 text-sm text-slate-300 lg:flex">
                <li><a href="#about" data-nav-link class="nav-link">{{ __('portfolio.navigation.about') }}</a></li>
                <li><a href="#experience" data-nav-link class="nav-link">{{ __('portfolio.navigation.experience') }}</a></li>
                <li><a href="#projects" data-nav-link class="nav-link">{{ __('portfolio.navigation.projects') }}</a></li>
                <li><a href="#skills" data-nav-link class="nav-link">{{ __('portfolio.navigation.skills') }}</a></li>
                <li><a href="#contact" data-nav-link class="nav-link">{{ __('portfolio.navigation.contact') }}</a></li>
            </ul>
        </nav>
        <div id="mobile-menu" class="hidden border-t border-slate-800 px-6 py-4 sm:px-8 lg:hidden">
            <div class="mb-4 flex items-center gap-2" aria-label="{{ __('portfolio.navigation.language_switcher') }}">
                <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="rounded border px-2 py-1 text-xs transition {{ app()->getLocale() === 'en' ? 'border-violet-400 bg-violet-500/10 text-violet-200' : 'border-slate-700 text-slate-300 hover:border-slate-500' }}" aria-label="{{ __('portfolio.navigation.switch_to_english') }}">🇬🇧</a>
                <a href="{{ route('locale.switch', ['locale' => 'fr']) }}" class="rounded border px-2 py-1 text-xs transition {{ app()->getLocale() === 'fr' ? 'border-violet-400 bg-violet-500/10 text-violet-200' : 'border-slate-700 text-slate-300 hover:border-slate-500' }}" aria-label="{{ __('portfolio.navigation.switch_to_french') }}">🇫🇷</a>
            </div>
            <ul class="space-y-3 text-sm text-slate-300">
                <li><a href="#about" data-nav-link class="nav-link block">{{ __('portfolio.navigation.about') }}</a></li>
                <li><a href="#experience" data-nav-link class="nav-link block">{{ __('portfolio.navigation.experience') }}</a></li>
                <li><a href="#projects" data-nav-link class="nav-link block">{{ __('portfolio.navigation.projects') }}</a></li>
                <li><a href="#skills" data-nav-link class="nav-link block">{{ __('portfolio.navigation.skills') }}</a></li>
                <li><a href="#contact" data-nav-link class="nav-link block">{{ __('portfolio.navigation.contact') }}</a></li>
            </ul>
        </div>
    </header>

    <main id="main-content">
        <x-section-container id="hero" class="min-h-[calc(100vh-74px)] flex items-center">
            <div class="grid w-full gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                <div>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.22em] text-violet-300">{{ __('portfolio.hero.badge') }}</p>
                    <h1 class="text-balance text-4xl font-semibold leading-tight text-slate-50 sm:text-5xl lg:text-6xl">
                        {{ $profile['headline'] }}
                    </h1>
                    <p class="mt-5 max-w-2xl text-pretty text-lg leading-relaxed text-slate-300">{{ $profile['description'] }}</p>
                    <p class="mt-4 max-w-2xl text-base text-slate-400">{{ $profile['intro'] }}</p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <x-cta-button href="#projects">{{ __('portfolio.hero.view_projects') }}</x-cta-button>
                        <x-cta-button :href="$profile['resume_url']" variant="secondary">{{ __('portfolio.hero.download_resume') }}</x-cta-button>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-6 text-sm text-slate-400">
                        <p><span class="text-slate-200">{{ __('portfolio.hero.name') }}:</span> {{ $profile['name'] }}</p>
                        <p><span class="text-slate-200">{{ __('portfolio.hero.role') }}:</span> {{ $profile['title'] }}</p>
                        <p><span class="text-slate-200">{{ __('portfolio.hero.location') }}:</span> {{ $profile['location'] }}</p>
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
                        <pre class="terminal-code overflow-x-auto text-xs leading-6 text-slate-200"><code>{{ __('portfolio.hero.terminal_script') }}</code></pre>
                    </div>
                </div>
            </div>
        </x-section-container>

        <x-section-container id="about" class="reveal">
            <x-section-title
                :eyebrow="__('portfolio.sections.about.eyebrow')"
                :title="__('portfolio.sections.about.title')"
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
                :eyebrow="__('portfolio.sections.experience.eyebrow')"
                :title="__('portfolio.sections.experience.title')"
                :description="__('portfolio.sections.experience.description')"
            />

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @foreach ($experiences as $experience)
                    <x-experience-card :experience="$experience" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="projects" class="reveal">
            <x-section-title
                :eyebrow="__('portfolio.sections.projects.eyebrow')"
                :title="__('portfolio.sections.projects.title')"
                :description="__('portfolio.sections.projects.description')"
            />

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @foreach ($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="case-studies" class="reveal">
            <x-section-title
                :eyebrow="__('portfolio.sections.case_studies.eyebrow')"
                :title="__('portfolio.sections.case_studies.title')"
                :description="__('portfolio.sections.case_studies.description')"
            />

            <div class="mt-10 space-y-6">
                @foreach ($caseStudies as $caseStudy)
                    <article class="rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
                        <h3 class="text-2xl font-semibold text-slate-100">{{ $caseStudy['title'] }}</h3>
                        <div class="mt-4 grid gap-4 md:grid-cols-2">
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">{{ __('portfolio.case_study.problem') }}</h4>
                                <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ $caseStudy['problem'] }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">{{ __('portfolio.case_study.solution') }}</h4>
                                <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ $caseStudy['solution'] }}</p>
                            </div>
                        </div>

                        <div class="mt-5 grid gap-5 md:grid-cols-2">
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">{{ __('portfolio.case_study.architecture') }}</h4>
                                <ul class="mt-2 space-y-2 text-sm text-slate-300">
                                    @foreach ($caseStudy['architecture'] as $architecturePoint)
                                        <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-300"></span>{{ $architecturePoint }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-violet-300">{{ __('portfolio.case_study.result') }}</h4>
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
                :eyebrow="__('portfolio.sections.skills.eyebrow')"
                :title="__('portfolio.sections.skills.title')"
                :description="__('portfolio.sections.skills.description')"
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
                :eyebrow="__('portfolio.sections.statistics.eyebrow')"
                :title="__('portfolio.sections.statistics.title')"
                :description="__('portfolio.sections.statistics.description')"
            />

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($statistics as $stat)
                    <x-statistic-card :stat="$stat" />
                @endforeach
            </div>
        </x-section-container>

        <x-section-container id="contact" class="reveal">
            <x-section-title
                :eyebrow="__('portfolio.sections.contact.eyebrow')"
                :title="__('portfolio.sections.contact.title')"
                :description="__('portfolio.sections.contact.description')"
            />

            <div class="mt-10 grid gap-8 lg:grid-cols-[0.45fr_0.55fr]">
                <div class="space-y-5 rounded-2xl border border-slate-800 bg-slate-900/70 p-6">
                    <p class="text-sm text-slate-300"><span class="font-semibold text-slate-100">{{ __('portfolio.contact.email') }}:</span> <a class="text-violet-300 hover:text-violet-200" href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                    <p class="text-sm text-slate-300"><span class="font-semibold text-slate-100">{{ __('portfolio.contact.phone') }}:</span> <a class="text-violet-300 hover:text-violet-200" href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a></p>
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
            <p>{{ __('portfolio.footer.built_with', ['year' => now()->year, 'name' => $profile['name']]) }}</p>
            <a href="{{ route('sitemap') }}" class="hover:text-slate-200">{{ __('portfolio.footer.sitemap') }}</a>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
