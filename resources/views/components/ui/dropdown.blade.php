<div x-data="{ open: false }" x-on:click.outside="open = false" class="relative">
    <div x-on:click="open = ! open">{{ $trigger }}</div>
    <div x-show="open" x-cloak {{ $attributes->class('absolute right-0 z-20 mt-2 min-w-48 rounded-lg border border-slate-200 bg-white p-2 shadow-lg') }}>
        {{ $slot }}
    </div>
</div>
