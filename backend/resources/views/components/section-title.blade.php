@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
])

<div class="max-w-3xl">
    @if ($eyebrow)
        <p class="mb-3 text-xs font-semibold uppercase tracking-[0.22em] text-violet-300">{{ $eyebrow }}</p>
    @endif
    <h2 class="text-balance text-3xl font-semibold text-slate-50 sm:text-4xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-4 text-pretty text-base leading-relaxed text-slate-300 sm:text-lg">{{ $description }}</p>
    @endif
</div>
