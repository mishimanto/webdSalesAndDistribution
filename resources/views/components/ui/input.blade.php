@props(['label' => null, 'name'])

<label class="grid gap-1.5 text-sm font-medium text-slate-700">
    @if ($label)
        <span>{{ $label }}</span>
    @endif
    <input name="{{ $name }}" {{ $attributes->class('rounded-lg border border-slate-300 bg-white px-3 py-2 text-slate-900 shadow-sm outline-none focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20') }}>
    @error($name)
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</label>
