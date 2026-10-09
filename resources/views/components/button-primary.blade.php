@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-bold text-white bg-[#FF0000] hover:bg-[#CC0000] rounded-full px-8 py-3.5 transition-all duration-200 shadow-md hover:shadow-lg active:scale-95 text-center cursor-pointer text-base sm:text-lg']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-bold text-white bg-[#FF0000] hover:bg-[#CC0000] rounded-full px-8 py-3.5 transition-all duration-200 shadow-md hover:shadow-lg active:scale-95 text-center cursor-pointer text-base sm:text-lg']) }}>
        {{ $slot }}
    </button>
@endif
