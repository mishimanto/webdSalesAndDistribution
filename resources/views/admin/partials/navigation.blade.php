<aside x-data="{ open: false }" class="border-b border-slate-200 bg-slate-950 text-white lg:min-h-screen lg:border-r lg:border-b-0">
    <div class="flex items-center justify-between p-5">
        <a href="{{ route('admin.dashboard') }}" class="font-semibold">{{ config('app.name') }}</a>
        <button type="button" class="rounded p-2 lg:hidden" x-on:click="open = ! open" aria-label="Toggle navigation">Menu</button>
    </div>
    <nav class="grid gap-1 px-3 pb-5 lg:block" x-bind:class="open ? 'grid' : 'hidden lg:grid'">
        <a href="{{ route('admin.dashboard') }}" class="rounded-lg bg-white/10 px-3 py-2 text-sm">Dashboard</a>
    </nav>
</aside>
