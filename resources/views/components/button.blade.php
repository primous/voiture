@props([
    'variant' => 'primary', // 'primary', 'secondary', 'outline', 'outline-red', 'whatsapp'
    'size' => 'md',        // 'sm', 'md', 'lg'
    'href' => null,
    'type' => 'button',
    'class' => '',
])

@php
    $baseClasses = "inline-flex items-center justify-center font-semibold rounded-[10px] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-[0.98] select-none text-center cursor-pointer";

    $sizeClasses = match($size) {
        'sm' => 'px-4 py-2 text-sm gap-1.5',
        'lg' => 'px-8 py-4 text-base md:text-lg gap-2.5 shadow-sm',
        default => 'px-6 py-3 text-base gap-2',
    };

    $variantClasses = match($variant) {
        'primary' => 'bg-[#FF0000] text-white hover:bg-[#CC0000] focus:ring-[#FF0000] shadow-sm hover:shadow',
        'secondary' => 'bg-[#000000] text-white hover:bg-[#222222] focus:ring-black shadow-sm',
        'outline' => 'bg-white text-black border-2 border-black hover:bg-gray-50 focus:ring-black',
        'outline-red' => 'bg-white text-[#FF0000] border-2 border-[#FF0000] hover:bg-red-50 focus:ring-[#FF0000]',
        'whatsapp' => 'bg-[#25D366] text-white hover:bg-[#1EBE5D] focus:ring-[#25D366] shadow-sm',
        default => 'bg-[#FF0000] text-white hover:bg-[#CC0000] focus:ring-[#FF0000]',
    };

    $classes = "{$baseClasses} {$sizeClasses} {$variantClasses} {$class}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
