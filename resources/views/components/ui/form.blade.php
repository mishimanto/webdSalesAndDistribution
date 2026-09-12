@props(['method' => 'POST'])

<form method="{{ in_array(strtoupper($method), ['GET', 'POST']) ? strtoupper($method) : 'POST' }}" {{ $attributes }}>
    @unless (in_array(strtoupper($method), ['GET', 'HEAD', 'OPTIONS']))
        @csrf
    @endunless
    @unless (in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endunless
    {{ $slot }}
</form>
