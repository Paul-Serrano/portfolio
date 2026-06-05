@props(['stat'])

<article class="rounded-2xl border border-slate-800 bg-slate-900/80 p-6 text-center">
    <p class="text-4xl font-semibold text-violet-300">
        <span data-counter data-target="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] ?? '' }}">0</span>
    </p>
    <p class="mt-2 text-sm text-slate-300">{{ $stat['label'] }}</p>
</article>
