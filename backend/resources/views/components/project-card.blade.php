@props(['project'])

<article class="group rounded-2xl border border-slate-800 bg-gradient-to-b from-slate-900 to-slate-900/70 p-6 transition hover:-translate-y-1 hover:border-violet-400/40">
    <div class="mb-3 flex items-center justify-between gap-4">
        <span class="rounded-full border border-slate-700 px-3 py-1 text-xs text-slate-300">{{ $project['type'] }}</span>
        @if (!empty($project['featured']))
            <span class="rounded-full bg-violet-500/15 px-3 py-1 text-xs font-medium text-violet-200">{{ __('portfolio.project.featured') }}</span>
        @endif
    </div>
    <h3 class="text-xl font-semibold text-slate-100">{{ $project['title'] }}</h3>
    <p class="mt-3 text-sm leading-relaxed text-slate-300">{{ $project['description'] }}</p>
    <div class="mt-4 grid gap-3 text-sm text-slate-300">
        <p><span class="font-semibold text-slate-100">{{ __('portfolio.project.challenge') }}:</span> {{ $project['challenge'] }}</p>
        <p><span class="font-semibold text-slate-100">{{ __('portfolio.project.outcome') }}:</span> {{ $project['outcome'] }}</p>
    </div>
    <div class="mt-5 flex flex-wrap gap-2">
        @foreach ($project['technologies'] as $technology)
            <x-skill-badge :skill="$technology" />
        @endforeach
    </div>
    <div class="mt-6 flex flex-wrap gap-3">
        @if (!empty($project['github']))
            <x-cta-button :href="$project['github']" variant="secondary" target="_blank">GitHub</x-cta-button>
        @endif
        @if (!empty($project['demo']))
            <x-cta-button :href="$project['demo']" target="_blank">{{ __('portfolio.project.live_demo') }}</x-cta-button>
        @endif
    </div>
</article>
