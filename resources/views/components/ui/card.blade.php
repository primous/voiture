@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'bg-white rounded-2xl border border-zinc-200 shadow-sm p-6 sm:p-8 transition-all duration-300 hover:shadow-md hover:border-zinc-300']) }}>
    {{ $slot }}
</{{ $as }}>
