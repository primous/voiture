@props([
    'contacts' => [],
])

<div 
    x-show="mobileOpen" 
    x-cloak
    class="fixed inset-0 z-50 lg:hidden"
    role="dialog" 
    aria-modal="true"
    aria-label="Menu principal de navigation"
    @keydown.escape.window="mobileOpen = false"
>
    <!-- Backdrop sombre avec flou léger -->
    <div 
        x-show="mobileOpen"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/60"
        @click="mobileOpen = false"
        aria-hidden="true"
    ></div>

    <!-- Tiroir latéral blanc -->
    <div 
        x-show="mobileOpen"
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-y-0 right-0 z-50 w-full max-w-sm bg-white shadow-2xl flex flex-col justify-between overflow-y-auto"
        @click.away="mobileOpen = false"
    >
        <div class="p-6">
            <!-- Header du Drawer -->
            <div class="flex items-center justify-between pb-6 border-b border-[#E5E5E5]">
                <a href="#hero" @click="mobileOpen = false" class="flex items-center">
                    <img src="/images/logo-reinex.png" alt="Reinex Véhicules Garantis" class="h-9 w-auto object-contain">
                </a>
                <button 
                    type="button" 
                    @click="mobileOpen = false"
                    class="p-2 -mr-2 text-black hover:text-[#FF0000] rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-[#FF0000]"
                    aria-label="Fermer le menu de navigation"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Liste des liens avec icônes linéaires et séparateurs fins -->
            <nav class="mt-6 flex flex-col space-y-1">
                <a 
                    href="#hero" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-[#FF0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Accueil</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <a 
                    href="#voitures" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                        </svg>
                        <span>Nos voitures disponibles</span>
                    </div>
                    <span class="text-xs font-bold px-2 py-0.5 bg-[#FFF0F0] text-[#FF0000] rounded-full">Stock</span>
                </a>

                <a 
                    href="#methode" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span>Notre méthode de contrôle</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <a 
                    href="#etapes" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <span>Comment ça marche</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <a 
                    href="#garanties" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Nos garanties</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <a 
                    href="#faq" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors border-b border-gray-100"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Questions fréquentes (FAQ)</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>

                <a 
                    href="#contact" 
                    @click="mobileOpen = false"
                    class="flex items-center justify-between py-3.5 px-3 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-[#F7F7F7] rounded-xl transition-colors"
                >
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>Contact & Showroom</span>
                    </div>
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </nav>
        </div>

        <!-- Section CTA du bas -->
        <div class="p-6 bg-[#F7F7F7] border-t border-[#E5E5E5] space-y-3">
            <a 
                href="#voitures" 
                @click="mobileOpen = false"
                class="w-full flex items-center justify-center py-3.5 px-4 bg-[#FF0000] text-white font-bold rounded-[10px] hover:bg-[#CC0000] transition-colors shadow-sm"
            >
                Voir les voitures disponibles
            </a>
            <button 
                type="button" 
                @click="mobileOpen = false; $store.leadModal.openTestDrive()"
                class="w-full flex items-center justify-center py-3.5 px-4 bg-black text-white font-semibold rounded-[10px] hover:bg-neutral-800 transition-colors"
            >
                Réserver un essai gratuit
            </button>
            <div class="pt-2 text-center text-xs text-[#666666]">
                Besoin d'un conseil immédiat ? <a href="tel:{{ $contacts['phone'] ?? '+33189000000' }}" class="font-semibold text-black underline">Appeler l'agence</a>
            </div>
        </div>
    </div>
</div>
