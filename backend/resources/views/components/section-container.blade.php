@props(['id' => null, 'class' => ''])

<section @if ($id) id="{{ $id }}" @endif class="mx-auto w-full max-w-7xl px-6 py-20 sm:px-8 lg:px-12 {{ $class }}">
    {{ $slot }}
</section>
