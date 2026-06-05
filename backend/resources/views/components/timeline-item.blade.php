@props(['experience'])

<article class="group relative rounded-2xl border border-slate-800 bg-slate-900/70 p-6 backdrop-blur">
    <div class="mb-4 flex flex-wrap items-center gap-3">
        <span class="rounded-full border border-violet-400/30 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-200">{{ $experience['period'] }}</span>
        <span class="rounded-full border border-slate-700 px-3 py-1 text-xs text-slate-300">{{ $experience['type'] }}</span>
    </div>
    <h3 class="text-xl font-semibold text-slate-100">{{ $experience['role'] }}</h3>
    <p class="mt-1 text-sm text-slate-400">{{ $experience['company'] }}</p>
    <p class="mt-4 text-sm leading-relaxed text-slate-300">{{ $experience['description'] }}</p>
    <div class="mt-5 flex flex-wrap gap-2">
        @foreach ($experience['technologies'] as $technology)
            <x-skill-badge :skill="$technology" />
        @endforeach
    </div>
    <ul class="mt-5 space-y-2 text-sm text-slate-300">
        @foreach ($experience['achievements'] as $achievement)
            <li class="flex items-start gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-violet-300"></span>
                <span>{{ $achievement }}</span>
            </li>
        @endforeach
    </ul>
</article>
