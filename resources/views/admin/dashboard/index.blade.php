@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="grid gap-8">
        <header>
            <x-ui.badge>Traditional Blade</x-ui.badge>
            <h1 class="mt-3 text-3xl font-semibold tracking-tight">Admin dashboard</h1>
            <p class="mt-2 text-slate-600">This area is controller-driven and does not load Livewire.</p>
        </header>
        <x-ui.card>
            <div x-data="{ visible: false }" class="grid gap-4">
                <h2 class="text-lg font-semibold">Foundation status</h2>
                <x-ui.button x-on:click="visible = ! visible">Test admin Alpine</x-ui.button>
                <x-ui.alert x-show="visible" x-cloak>Standalone Alpine is running without Livewire.</x-ui.alert>
            </div>
        </x-ui.card>
    </div>
@endsection
