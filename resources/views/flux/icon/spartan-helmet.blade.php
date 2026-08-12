@props([
    'variant' => 'outline',
])

@php
    $classes = Flux::classes('shrink-0 object-contain')->add(
        match ($variant) {
            'outline', 'solid' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );
@endphp

<img
    {{ $attributes->class($classes) }}
    src="{{ asset('images/elm.png') }}"
    alt="Elmo espartano"
    data-flux-icon
>
