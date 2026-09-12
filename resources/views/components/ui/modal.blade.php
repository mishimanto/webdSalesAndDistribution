@props(['name'])

<div x-data="{ open: false }" x-on:open-modal.window="open = $event.detail === '{{ $name }}'" x-on:keydown.escape.window="open = false">
    {{ $trigger ?? '' }}
    <div x-show="open" x-cloak class="fixed inset-0 z-50 grid place-items-center bg-slate-950/50 p-4" role="dialog" aria-modal="true">
        <div x-on:click.outside="open = false" {{ $attributes->class('w-full max-w-lg rounded-2xl bg-white p-6 shadow-xl') }}>
            {{ $slot }}
        </div>
    </div>
</div>
