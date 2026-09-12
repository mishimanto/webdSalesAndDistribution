@props(['href' => null, 'type' => 'button', 'variant' => 'primary'])

@php
    $classes = match ($variant) {
        'secondary' => 'border border-slate-300 bg-white text-slate-700 hover:bg-slate-50',
        default => 'bg-brand-600 text-white hover:bg-brand-700',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-sm font-semibold transition', $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->class(['inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-sm font-semibold transition disabled:cursor-not-allowed disabled:opacity-60', $classes]) }}>
        {{ $slot }}
    </button>
@endif
