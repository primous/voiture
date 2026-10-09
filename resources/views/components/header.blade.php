@props([
    'contacts' => [],
])

<header 
    x-data="{ scrolled: false, mobileOpen: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="{ 'shadow-md py-3 bg-white/95 backdrop-blur-sm': scrolled, 'py-5 bg-white': !scrolled }"
    class="sticky top-0 z-40 transition-all duration-300 border-b border-[#E5E5E5]/60"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo Reinex Officiel à gauche -->
            <a href="#hero" class="flex items-center group transition-transform duration-200 hover:scale-[1.02]" aria-label="Reinex - Retour haut de page">
                <img 
                    src="/images/logo-reinex.png" 
                    alt="Reinex - Voitures d'occasion vérifiées et garanties" 
                    class="h-9 md:h-11 w-auto object-contain"
                >
            </a>

            <!-- Navigation Desktop au centre -->
            <nav class="hidden lg:flex items-center space-x-8 text-[15px] font-medium text-black" aria-label="Navigation principale">
                <a href="#hero" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    Accueil
                </a>
                <a href="#voitures" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    Nos voitures
                </a>
                <a href="#methode" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    Comment ça marche
                </a>
                <a href="#garanties" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    Nos garanties
                </a>
                <a href="#faq" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    FAQ
                </a>
                <a href="#contact" class="hover:text-[#FF0000] transition-colors py-1 relative after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-[#FF0000] after:transition-all">
                    Contact
                </a>
            </nav>

            <!-- CTA Desktop à droite -->
            <div class="hidden lg:flex items-center space-x-4">
                <a 
                    href="tel:{{ $contacts['phone'] ?? '+33189000000' }}"
                    class="text-sm font-semibold text-black hover:text-[#FF0000] transition-colors flex items-center gap-1.5"
                    title="Nous appeler directement"
                >
                    <svg class="w-4 h-4 text-[#FF0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>{{ $contacts['phone_display'] ?? '01 89 00 00 00' }}</span>
                </a>

                <x-button href="#voitures" variant="primary" size="md">
                    Voir les voitures
                </x-button>
            </div>

            <!-- Hamburger Mobile -->
            <div class="flex items-center lg:hidden space-x-2">
                <a 
                    href="#voitures" 
                    class="text-xs font-bold px-3 py-2 bg-[#FF0000] text-white rounded-[8px] hover:bg-[#CC0000] transition-colors"
                >
                    Stock
                </a>
                
                <button 
                    type="button" 
                    @click="mobileOpen = true"
                    class="p-2 rounded-lg text-black hover:text-[#FF0000] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#FF0000] transition-colors"
                    aria-label="Ouvrir le menu"
                    :aria-expanded="mobileOpen.toString()"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Composant Tiroir Mobile -->
    <x-mobile-menu :contacts="$contacts" />
</header>
