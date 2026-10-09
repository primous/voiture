@props([
    'contacts' => [],
])

@php
    $phone = $contacts['phone'] ?? '+33189000000';
    $phoneDisplay = $contacts['phone_display'] ?? '01 89 00 00 00';
    $whatsapp = $contacts['whatsapp'] ?? '33189000000';
    $email = $contacts['email'] ?? 'contact@reinex.fr';
    $address = $contacts['address'] ?? '45 Avenue de l\'Automobile, 75017 Paris';
    $hours = $contacts['hours'] ?? 'Lun - Sam : 09h00 - 19h00';
@endphp

<footer class="bg-[#000000] text-white pt-16 pb-12 border-t border-neutral-800" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-neutral-800">
            
            <!-- Colonne 1 & 2 : Marque & Baseline -->
            <div class="lg:col-span-2 space-y-5">
                <a href="#hero" class="inline-block bg-white px-3.5 py-2 rounded-xl hover:opacity-95 transition-opacity" title="Reinex Accueil">
                    <img 
                        src="/images/logo-reinex.png" 
                        alt="Reinex - Véhicules d'occasion certifiés" 
                        class="h-8 md:h-9 w-auto object-contain"
                    >
                </a>
                
                <p class="text-gray-400 text-base max-w-sm leading-relaxed">
                    Des voitures vérifiées. Des prix transparents. Une confiance durable.
                </p>

                <div class="pt-2 flex items-center space-x-3 text-xs text-neutral-400">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md bg-neutral-900 border border-neutral-800 text-white font-mono">
                        50 points de contrôle
                    </span>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md bg-neutral-900 border border-neutral-800 text-white font-mono">
                        Garantie incluse
                    </span>
                </div>
            </div>

            <!-- Colonne 3 : Navigation rapide -->
            <div>
                <h4 class="text-sm font-bold uppercase tracking-wider text-white font-heading mb-4">
                    Navigation
                </h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li>
                        <a href="#voitures" class="hover:text-white transition-colors flex items-center gap-2">
                            <span>Nos voitures</span>
                        </a>
                    </li>
                    <li>
                        <a href="#garanties" class="hover:text-white transition-colors flex items-center gap-2">
                            <span>Nos garanties</span>
                        </a>
                    </li>
                    <li>
                        <a href="#methode" class="hover:text-white transition-colors flex items-center gap-2">
                            <span>Comment ça marche</span>
                        </a>
                    </li>
                    <li>
                        <a href="#faq" class="hover:text-white transition-colors flex items-center gap-2">
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:text-white transition-colors flex items-center gap-2">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4 : Coordonnées directes -->
            <div class="lg:col-span-2">
                <h4 class="text-sm font-bold uppercase tracking-wider text-white font-heading mb-4">
                    Contact & Showroom
                </h4>
                <ul class="space-y-3.5 text-sm text-gray-300">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#FF0000] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ $address }}</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#FF0000] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:{{ $phone }}" class="hover:text-white font-semibold underline underline-offset-4 decoration-[#FF0000]">
                            {{ $phoneDisplay }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#25D366] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.979-.275-.1-.475-.15-.675.15-.2.3-.775.979-.95 1.179-.175.2-.35.225-.65.075-.3-.15-1.267-.467-2.413-1.49-1.043-.93-1.748-2.079-1.953-2.43-.205-.351-.022-.541.128-.691.135-.135.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525s-.675-1.628-.925-2.23c-.243-.585-.49-.506-.675-.515-.175-.009-.375-.011-.575-.011s-.525.075-.8.375c-.275.3-1.05 1.028-1.05 2.508 0 1.48 1.075 2.91 1.225 3.11.15.2 2.115 3.23 5.123 4.53.716.31 1.275.495 1.71.633.719.229 1.373.197 1.89.12.578-.087 1.78-.727 2.03-1.43.25-.702.25-1.303.175-1.43-.075-.127-.275-.202-.575-.352z"/>
                        </svg>
                        <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener" class="text-emerald-400 hover:text-emerald-300 font-semibold">
                            Échange direct sur WhatsApp
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#FF0000] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:{{ $email }}" class="hover:text-white transition-colors">
                            {{ $email }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3 text-xs text-neutral-400 pt-1">
                        <svg class="w-4 h-4 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ $hours }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bas de page & Liens légaux -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-neutral-400 gap-4">
            <p>
                &copy; {{ date('Y') }} Reinex. Tous droits réservés. Vente de véhicules d'occasion vérifiés et garantis.
            </p>

            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-white transition-colors">Mentions légales</a>
                <a href="#" class="hover:text-white transition-colors">Politique de confidentialité</a>
                <a href="#" class="hover:text-white transition-colors">CGV</a>
            </div>
        </div>
    </div>
</footer>
