@props(['type' => 'info'])

@php
    $classes = match ($type) {
        'success' => 'border-emerald-200 bg-emerald-50 text-emerald-800',
        'danger' => 'border-red-200 bg-red-50 text-red-800',
        default => 'border-blue-200 bg-blue-50 text-blue-800',
    };
@endphp

<div role="alert" {{ $attributes->class(['rounded-lg border px-4 py-3 text-sm', $classes]) }}>
    {{ $slot }}
</div>
