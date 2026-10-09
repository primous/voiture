@props([
    'vehicle' => [],
])

@php
    $id = $vehicle['id'] ?? 1;
    $title = $vehicle['title'] ?? 'Véhicule d\'occasion';
    $subtitle = $vehicle['subtitle'] ?? '';
    $price = $vehicle['price'] ?? '0 €';
    $monthly = $vehicle['monthly'] ?? null;
    $year = $vehicle['year'] ?? date('Y');
    $mileage = $vehicle['mileage'] ?? '0 km';
    $gearbox = $vehicle['gearbox'] ?? 'Automatique';
    $fuel = $vehicle['fuel'] ?? 'Essence';
    $warranty = $vehicle['warranty'] ?? 'Garantie 12 mois';
    $image = $vehicle['image'] ?? '/images/hero-car.jpg';
    $tag = $vehicle['tag'] ?? 'Prête à rouler';
@endphp

<div class="group bg-white rounded-[16px] border border-[#E5E5E5] overflow-hidden hover:border-[#FF0000]/50 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <!-- Image & Badges -->
    <div class="relative overflow-hidden bg-neutral-100 aspect-[16/10]">
        <img 
            src="{{ $image }}" 
            alt="{{ $title }} - Reinex occasion vérifiée" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >
        
        <!-- Tag d'état en haut à gauche -->
        <div class="absolute top-3 left-3 flex flex-col gap-1.5">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#FF0000] text-white shadow-sm">
                {{ $tag }}
            </span>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-black/75 text-white backdrop-blur-sm">
                50 points vérifiés
            </span>
        </div>

        <!-- Garantie en haut à droite -->
        <div class="absolute top-3 right-3">
            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-white/95 text-black font-mono shadow-sm">
                🛡️ {{ $warranty }}
            </span>
        </div>
    </div>

    <!-- Contenu de la fiche -->
    <div class="p-5 md:p-6 flex-1 flex flex-col justify-between">
        <div>
            <!-- Titre & sous-titre -->
            <div class="mb-3">
                <h3 class="text-xl font-bold text-black group-hover:text-[#FF0000] transition-colors font-heading tracking-tight">
                    {{ $title }}
                </h3>
                @if ($subtitle)
                    <p class="text-xs text-[#666666] font-medium mt-0.5">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>

            <!-- Caractéristiques techniques clés en badges pills -->
            <div class="grid grid-cols-2 gap-2 my-4 py-3 border-y border-[#E5E5E5]/60 text-xs text-[#666666]">
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>{{ $year }}</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span>{{ $mileage }}</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                    <span>{{ $gearbox }}</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                    <span>{{ $fuel }}</span>
                </div>
            </div>
        </div>

        <!-- Prix transparent et Actions -->
        <div>
            <div class="flex items-baseline justify-between mb-4">
                <div>
                    <span class="text-xs text-[#666666] uppercase tracking-wider block">Prix total payé</span>
                    <span class="text-2xl font-extrabold text-black font-heading">{{ $price }}</span>
                </div>
                @if ($monthly)
                    <div class="text-right">
                        <span class="text-xs text-[#666666] block">Ou dès</span>
                        <span class="text-sm font-bold text-[#FF0000]">{{ $monthly }}</span>
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-2 gap-2">
                <button 
                    type="button" 
                    @click="$store.leadModal.openTestDrive('{{ addslashes($title) }}')"
                    class="w-full py-2.5 px-3 bg-[#FF0000] text-white text-xs sm:text-sm font-bold rounded-[8px] hover:bg-[#CC0000] transition-colors shadow-sm flex items-center justify-center gap-1"
                >
                    <span>Essai gratuit</span>
                </button>

                <a 
                    href="https://wa.me/33189000000?text={{ urlencode('Bonjour Reinex, je souhaite des informations sur le véhicule ' . $title . ' (' . $price . ')') }}" 
                    target="_blank" 
                    rel="noopener"
                    class="w-full py-2.5 px-3 bg-[#F7F7F7] border border-[#E5E5E5] text-black text-xs sm:text-sm font-semibold rounded-[8px] hover:bg-black hover:text-white transition-colors flex items-center justify-center gap-1"
                >
                    <span>Détails & Reprise</span>
                </a>
            </div>
        </div>
    </div>
</div>
