@props([
    'class' => '',
])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 bg-red-600 text-white font-semibold text-xs tracking-wide uppercase px-3.5 py-1.5 rounded-full shadow-sm']) }}>
    {{ $slot }}
</span>
