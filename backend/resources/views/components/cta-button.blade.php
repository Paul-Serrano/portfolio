@props([
    'href' => '#',
    'variant' => 'primary',
    'target' => null,
])

@php
    $base = 'inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-medium transition duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-violet-400 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950';
    $styles = [
        'primary' => 'bg-violet-500 text-slate-950 hover:bg-violet-400',
        'secondary' => 'border border-slate-700 bg-slate-900 text-slate-100 hover:border-slate-500 hover:bg-slate-800',
    ];
@endphp

<a href="{{ $href }}" @if ($target) target="{{ $target }}" rel="noopener noreferrer" @endif {{ $attributes->class([$base, $styles[$variant] ?? $styles['primary']]) }}>
    {{ $slot }}
</a>
