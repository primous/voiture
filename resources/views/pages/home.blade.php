<x-layouts.app :contacts="$contacts" :vehicles="$vehicles">

    {{-- ========================================================
         2. HERO : SECTION ATTENTION
         ======================================================== --}}
    <section id="hero" class="relative pt-8 pb-16 md:pt-16 md:pb-24 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Colonne Gauche : Texte & Accroches -->
                <div class="lg:col-span-7 space-y-6 lg:pr-6">
                    <!-- Badge de réassurance immédiat -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#FFF0F0] border border-[#FF0000]/20 text-[#FF0000] text-xs sm:text-sm font-bold">
                        <span class="w-2 h-2 rounded-full bg-[#FF0000] animate-pulse"></span>
                        <span>Agence certifiée Reinex · Occasions 100% vérifiées</span>
                    </div>

                    <!-- Titre H1 Principal -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[3.25rem] font-extrabold text-black font-heading leading-[1.15] tracking-tight">
                        Votre prochaine voiture est ici, <span class="text-[#FF0000]">vérifiée</span>, <span class="text-[#FF0000]">garantie</span>, prête à rouler.
                    </h1>

                    <!-- Sous-titre -->
                    <p class="text-lg md:text-xl text-[#666666] leading-relaxed max-w-2xl font-normal">
                        Fini les mauvaises surprises. Chez Reinex, chaque véhicule est rigoureusement contrôlé en <span class="font-bold text-black">50 points</span> avant d’être proposé à la vente.
                    </p>

                    <!-- Boutons d'action -->
                    <div class="pt-2 flex flex-col sm:flex-row gap-4 sm:items-center">
                        <x-button href="#voitures" variant="primary" size="lg">
                            <span>Voir les voitures disponibles</span>
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </x-button>

                        <x-button 
                            type="button" 
                            variant="secondary" 
                            size="lg"
                            @click="$store.leadModal.openTestDrive('Essai libre sur le parc')"
                        >
                            <svg class="w-5 h-5 mr-1 text-[#FF0000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Réserver un essai gratuit</span>
                        </x-button>
                    </div>

                    <!-- Micro-réassurance sous les boutons -->
                    <div class="pt-2 flex items-center flex-wrap gap-y-2 gap-x-4 text-xs sm:text-sm font-medium text-[#666666]">
                        <span class="flex items-center gap-1.5 text-black">
                            <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Contrôle 50 points
                        </span>
                        <span class="text-gray-300">·</span>
                        <span class="flex items-center gap-1.5 text-black">
                            <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Garantie 6 à 12 mois
                        </span>
                        <span class="text-gray-300">·</span>
                        <span class="flex items-center gap-1.5 text-black">
                            <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Essai gratuit & sans pression
                        </span>
                    </div>
                </div>

                <!-- Colonne Droite : Visuel Véhicule Réaliste + Carte Flottante -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto rounded-[20px] overflow-hidden shadow-2xl border border-[#E5E5E5] bg-neutral-100 group">
                        <img 
                            src="/images/hero-car.jpg" 
                            alt="Véhicule récent certifié Reinex prêt à rouler" 
                            class="w-full h-auto object-cover group-hover:scale-102 transition-transform duration-500"
                        >

                        <!-- Carte flottante sur l'image -->
                        <div class="absolute bottom-4 left-4 right-4 sm:right-auto sm:max-w-xs bg-white/95 backdrop-blur-md rounded-[14px] p-4 border border-[#E5E5E5] shadow-lg">
                            <div class="flex items-center gap-2 mb-2">
                                <div class="w-2.5 h-2.5 rounded-full bg-[#FF0000]"></div>
                                <span class="text-xs font-bold text-black uppercase tracking-wider font-heading">
                                    Label Qualité Reinex
                                </span>
                            </div>
                            <div class="space-y-1.5 text-xs text-neutral-800">
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Contrôlée en 50 points</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Historique & kilométrage vérifiés</span>
                                </div>
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-[#FF0000]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Garantie mécanique incluse</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ========================================================
         3. LE PROBLÈME : ATTENTION VERS INTÉRÊT
         ======================================================== --}}
    <section class="py-16 md:py-24 bg-[#000000] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] block mb-2 font-mono">
                    LE CONSTAT
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold font-heading tracking-tight mb-4 text-white">
                    Acheter une occasion ne devrait pas être un pari.
                </h2>
                <p class="text-lg text-gray-300 leading-relaxed">
                    Sur les marketplaces traditionnelles et entre particuliers, l'achat d'un véhicule suscite souvent plus d'angoisse que d'enthousiasme.
                </p>
            </div>

            <!-- 3 Craintes sous forme de cartes structurées -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Crainte 1 -->
                <div class="bg-neutral-900/90 border border-neutral-800 rounded-[16px] p-6 sm:p-8 hover:border-[#FF0000]/60 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-neutral-800 text-[#FF0000] flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 font-heading">
                        Kilométrage trafiqué ?
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Compteurs modifiés, carnets d'entretien introuvables ou révisions fantômes : le risque d'acheter un véhicule au passé obscur est bien réel.
                    </p>
                </div>

                <!-- Crainte 2 -->
                <div class="bg-neutral-900/90 border border-neutral-800 rounded-[16px] p-6 sm:p-8 hover:border-[#FF0000]/60 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-neutral-800 text-[#FF0000] flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 font-heading">
                        Panne dès le premier mois ?
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Embrayage fatigué, courroie négligée, injecteurs défaillants : un vice caché peut rapidement doubler le coût réel de votre acquisition.
                    </p>
                </div>

                <!-- Crainte 3 -->
                <div class="bg-neutral-900/90 border border-neutral-800 rounded-[16px] p-6 sm:p-8 hover:border-[#FF0000]/60 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-neutral-800 text-[#FF0000] flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 font-heading">
                        Vendeur introuvable après la vente ?
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Une fois les clés remises, de nombreux vendeurs ne répondent plus jamais. Aucun recours, aucun interlocuteur, aucun engagement de garantie.
                    </p>
                </div>
            </div>

            <!-- Transition rassurante vers Reinex -->
            <div class="mt-12 p-6 sm:p-8 rounded-[16px] bg-neutral-900 border-l-4 border-l-[#FF0000] border-neutral-800 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <p class="text-base text-gray-300">
                        Ces craintes sont légitimes. C’est pour ça que nous avons construit une agence où la transparence passe avant la vente.
                    </p>
                    <p class="text-lg font-bold text-white mt-1 font-heading">
                        Chez Reinex, vous savez exactement ce que vous achetez avant de signer.
                    </p>
                </div>

                <div class="flex-shrink-0">
                    <x-button href="#methode" variant="primary" size="md">
                        Notre méthode de contrôle
                    </x-button>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         4. NOTRE MÉTHODE : INTÉRÊT
         ======================================================== --}}
    <section id="methode" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                    RÉASSURANCE MÉTHODOLOGIQUE
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight mb-4">
                    Une sélection rigoureuse, un historique clair.
                </h2>
                <p class="text-lg text-[#666666]">
                    Nous ne retenons que les véhicules répondant à nos critères les plus stricts de sécurité, de fiabilité mécanique et d’esthétique.
                </p>
            </div>

            <!-- Grille 3 Cartes Méthode -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 : Inspection complète -->
                <x-feature-card
                    title="Inspection complète"
                    description="Moteur, boîte de vitesses, freinage, trains roulants, électronique de bord et carrosserie sont minutieusement passés au crible avant chaque mise en vente."
                    badge="50 points"
                >
                    <x-slot:icon>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </x-slot:icon>
                    
                    <div class="text-xs font-semibold text-black flex items-center gap-1.5">
                        <span class="text-[#FF0000]">✓</span> Rapport d'atelier fourni au client
                    </div>
                </x-feature-card>

                <!-- Carte 2 : Historique vérifié -->
                <x-feature-card
                    title="Historique vérifié"
                    description="Kilométrage réel, traçabilité des entretiens précédents, contrôle des antécédents de sinistres et documents administratifs vérifiés pour une cession sans accroc."
                    badge="Certifié"
                >
                    <x-slot:icon>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </x-slot:icon>

                    <div class="text-xs font-semibold text-black flex items-center gap-1.5">
                        <span class="text-[#FF0000]">✓</span> Rapport HistoVec & carnet à jour
                    </div>
                </x-feature-card>

                <!-- Carte 3 : Prix transparent -->
                <x-feature-card
                    title="Prix transparent"
                    description="Pas de frais de dossier surprises, pas de forfaits obligatoires dissimulés le jour de la signature. Le prix affiché correspond exactement au prix payé."
                    badge="Clé en main"
                >
                    <x-slot:icon>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </x-slot:icon>

                    <div class="text-xs font-semibold text-black flex items-center gap-1.5">
                        <span class="text-[#FF0000]">✓</span> Zéro coût caché à la livraison
                    </div>
                </x-feature-card>
            </div>

            <!-- Bloc visuel atelier & bouton Découvrir notre méthode -->
            <div class="mt-14 p-6 sm:p-8 rounded-[20px] bg-[#F7F7F7] border border-[#E5E5E5] grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 rounded-[14px] overflow-hidden shadow-sm">
                    <img 
                        src="/images/inspection-point.jpg" 
                        alt="Technicien qualifié contrôlant un véhicule d'occasion Reinex" 
                        class="w-full h-56 sm:h-64 object-cover"
                        loading="lazy"
                    >
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <h3 class="text-2xl font-bold text-black font-heading">
                        50 points d'inspection certifiés par nos techniciens
                    </h3>
                    <p class="text-base text-[#666666] leading-relaxed">
                        Chaque élément de sécurité et de confort est vérifié : compressions moteur, transmission, usure des plaquettes, amortisseurs, climatisation, phares et connectique. Vous recevez la fiche complète d'intervention lors de votre visite.
                    </p>
                    <div class="pt-2">
                        <x-button 
                            type="button" 
                            variant="secondary" 
                            size="md"
                            @click="$store.leadModal.openTestDrive('Demande fiche 50 points d\'inspection')"
                        >
                            Découvrir notre méthode & réserver un essai
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION VITRINE : NOS VOITURES DISPONIBLES
         ======================================================== --}}
    <section id="voitures" class="py-16 md:py-24 bg-[#F7F7F7] border-y border-[#E5E5E5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                        PARC DISPONIBLE IMMÉDIATEMENT
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight">
                        Nos véhicules prêts à rouler
                    </h2>
                    <p class="text-base text-[#666666] mt-2">
                        Sélectionnés, révisés et préparés en concession. Disponibles pour un essai gratuit dès aujourd'hui.
                    </p>
                </div>

                <div class="flex-shrink-0">
                    <x-button 
                        type="button" 
                        variant="outline-red" 
                        size="md"
                        @click="$store.leadModal.openTradeIn('Recherche personnalisée')"
                    >
                        <span>Recherche personnalisée / Reprise</span>
                    </x-button>
                </div>
            </div>

            <!-- Grille des voitures -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($vehicles as $vehicle)
                    <x-vehicle-card :vehicle="$vehicle" />
                @endforeach
            </div>

            <!-- Bannière réassurance sous le catalogue -->
            <div class="mt-12 p-6 rounded-[16px] bg-white border border-[#E5E5E5] text-center flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3 text-left">
                    <div class="w-10 h-10 rounded-full bg-[#FFF0F0] text-[#FF0000] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-black text-sm">Vous ne trouvez pas votre modèle idéal ?</h4>
                        <p class="text-xs text-[#666666]">Nos arrivages sont hebdomadaires. Nous trouvons votre véhicule selon votre budget précis.</p>
                    </div>
                </div>

                <x-button 
                    type="button" 
                    variant="secondary" 
                    size="sm"
                    @click="$store.leadModal.openTestDrive('Recherche véhicule sur mesure')"
                >
                    Faire une demande de recherche
                </x-button>
            </div>
        </div>
    </section>


    {{-- ========================================================
         5. BÉNÉFICES : DÉSIR
         ======================================================== --}}
    <section id="garanties" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Colonne Gauche : Liste des 5 bénéfices et accroche -->
                <div class="lg:col-span-7 space-y-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                            TRANQUILLITÉ ABSOLUE
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight mb-4">
                            Roulez l’esprit tranquille, dès le premier jour.
                        </h2>
                        
                        <!-- Accroche mise en avant demandée -->
                        <div class="p-4 rounded-xl bg-[#FFF0F0] border-l-4 border-[#FF0000] text-[#FF0000] font-bold text-lg font-heading my-4">
                            “Vous choisissez la voiture, on s’occupe du reste.”
                        </div>
                    </div>

                    <!-- 5 Bénéfices concrets avec icônes rouges ou noires -->
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-black/20 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-[#FF0000] text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-black text-base">Garantie 6 à 12 mois sur les véhicules</h3>
                                <p class="text-sm text-[#666666] mt-0.5">Couverture pièces et main-d'œuvre incluse sur le moteur, la boîte et les composants majeurs.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-black/20 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-black text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-black text-base">Essai gratuit avant tout engagement</h3>
                                <p class="text-sm text-[#666666] mt-0.5">Testez la voiture en conditions réelles, sur route et en ville, sans aucune obligation d'achat.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-black/20 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-[#FF0000] text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-black text-base">Facilités de paiement adaptées à votre budget</h3>
                                <p class="text-sm text-[#666666] mt-0.5">Possibilité d'échelonnement ou solutions de financement claires, calculées en toute franchise.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-black/20 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-black text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-black text-base">Reprise de votre ancien véhicule au juste prix</h3>
                                <p class="text-sm text-[#666666] mt-0.5">Estimation gratuite et déduction directe de la valeur sur votre nouvelle voiture sans contraintes de petites annonces.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-black/20 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-[#FF0000] text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-black text-base">Papiers et démarches pris en charge</h3>
                                <p class="text-sm text-[#666666] mt-0.5">Carte grise, immatriculation et certificat de non-gage : nous gérons tout l'administratif pour vous.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne Droite : Photo Remise des clés (Humaine & Authentique) -->
                <div class="lg:col-span-5">
                    <div class="rounded-[20px] overflow-hidden border border-[#E5E5E5] shadow-xl relative group">
                        <img 
                            src="/images/handover-keys.jpg" 
                            alt="Conseillère Reinex remettant les clés d'une voiture d'occasion à un client satisfait" 
                            class="w-full h-auto object-cover group-hover:scale-102 transition-transform duration-500"
                            loading="lazy"
                        >
                        <div class="p-5 bg-white border-t border-[#E5E5E5]">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">
                                    ✓
                                </div>
                                <div>
                                    <p class="font-bold text-black text-sm font-heading">Accompagnement de A à Z</p>
                                    <p class="text-xs text-[#666666]">Du premier essai jusqu'à la remise des clés en main propre.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ========================================================
         6. COMMENT ÇA MARCHE : DÉSIR
         ======================================================== --}}
    <section id="etapes" class="py-16 md:py-24 bg-[#F7F7F7] border-t border-[#E5E5E5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                    PARCOURS FLUIDE & SÉCURISÉ
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight mb-4">
                    Votre voiture en 4 étapes simples.
                </h2>
                <p class="text-lg text-[#666666]">
                    Zéro démarche complexe. Notre processus est conçu pour vous faire gagner du temps en toute transparence.
                </p>
            </div>

            <!-- Timeline Horizontale sur Desktop / Verticale sur Mobile -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                <!-- Etape 1 -->
                <div class="bg-white rounded-[16px] p-6 sm:p-7 border border-[#E5E5E5] flex flex-col justify-between hover:border-[#FF0000]/40 transition-all hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-3xl font-extrabold text-[#FF0000] font-mono">01</span>
                            <div class="w-10 h-10 rounded-lg bg-[#FFF0F0] text-[#FF0000] flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-black uppercase tracking-wide font-heading mb-2">
                            CHOISISSEZ
                        </h3>
                        <p class="text-sm text-[#666666] leading-relaxed">
                            Parcourez nos véhicules en stock ou dites-nous votre budget et vos besoins spécifiques.
                        </p>
                    </div>
                </div>

                <!-- Etape 2 -->
                <div class="bg-white rounded-[16px] p-6 sm:p-7 border border-[#E5E5E5] flex flex-col justify-between hover:border-[#FF0000]/40 transition-all hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-3xl font-extrabold text-[#FF0000] font-mono">02</span>
                            <div class="w-10 h-10 rounded-lg bg-[#FFF0F0] text-[#FF0000] flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-black uppercase tracking-wide font-heading mb-2">
                            ESSAYEZ
                        </h3>
                        <p class="text-sm text-[#666666] leading-relaxed">
                            Prenez le volant gratuitement, sans pression, pour vous assurer que le véhicule vous correspond.
                        </p>
                    </div>
                </div>

                <!-- Etape 3 -->
                <div class="bg-white rounded-[16px] p-6 sm:p-7 border border-[#E5E5E5] flex flex-col justify-between hover:border-[#FF0000]/40 transition-all hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-3xl font-extrabold text-[#FF0000] font-mono">03</span>
                            <div class="w-10 h-10 rounded-lg bg-[#FFF0F0] text-[#FF0000] flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-black uppercase tracking-wide font-heading mb-2">
                            VALIDEZ
                        </h3>
                        <p class="text-sm text-[#666666] leading-relaxed">
                            On vous explique l’historique, le prix ferme et transparent, et les options de paiement adaptées.
                        </p>
                    </div>
                </div>

                <!-- Etape 4 -->
                <div class="bg-white rounded-[16px] p-6 sm:p-7 border border-[#E5E5E5] flex flex-col justify-between hover:border-[#FF0000]/40 transition-all hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-3xl font-extrabold text-[#FF0000] font-mono">04</span>
                            <div class="w-10 h-10 rounded-lg bg-[#FFF0F0] text-[#FF0000] flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-black uppercase tracking-wide font-heading mb-2">
                            REPARTEZ
                        </h3>
                        <p class="text-sm text-[#666666] leading-relaxed">
                            Papiers faits, carte grise validée, garantie activée : repartez au volant clés en main.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bouton rouge Commencer maintenant -->
            <div class="mt-12 text-center">
                <x-button 
                    type="button" 
                    variant="primary" 
                    size="lg"
                    @click="$store.leadModal.openTestDrive()"
                >
                    Commencer maintenant
                </x-button>
            </div>
        </div>
    </section>


    {{-- ========================================================
         7. PREUVE SOCIALE
         ======================================================== --}}
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                    AVIS CLIENTS VÉRIFIÉS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight mb-4">
                    Ils nous ont fait confiance, ils en parlent.
                </h2>
                <p class="text-lg text-[#666666]">
                    La satisfaction de nos acheteurs est notre première carte de visite.
                </p>
            </div>

            <!-- 3 Cartes de témoignages -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($testimonials as $t)
                    <x-testimonial-card
                        :quote="$t['quote']"
                        :author="$t['author']"
                        :vehicle="$t['vehicle']"
                        :rating="$t['rating']"
                    />
                @endforeach
            </div>

            <!-- Chiffres clés réels / crédibles -->
            <div class="mt-16 pt-12 border-t border-[#E5E5E5] grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-2xl bg-[#F7F7F7]">
                    <div class="text-4xl sm:text-5xl font-extrabold text-black font-heading mb-2">
                        {{ $stats['sold_cars'] ?? '540+' }}
                    </div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-[#666666]">
                        Voitures vendues et garanties
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-[#F7F7F7]">
                    <div class="text-4xl sm:text-5xl font-extrabold text-[#FF0000] font-heading mb-2">
                        {{ $stats['satisfaction'] ?? '98%' }}
                    </div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-[#666666]">
                        De clients satisfaits
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-[#F7F7F7]">
                    <div class="text-4xl sm:text-5xl font-extrabold text-black font-heading mb-2">
                        {{ $stats['experience_years'] ?? '8' }} ans
                    </div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-[#666666]">
                        D'expérience automobile
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         8. FAQ : ACCORDÉON ALPINE.JS
         ======================================================== --}}
    <section id="faq" class="py-16 md:py-24 bg-[#F7F7F7] border-y border-[#E5E5E5]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeAccordion: 1 }">
            <div class="text-center mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-mono block mb-2">
                    TRANSPARENCE TOTALE
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-black font-heading tracking-tight mb-4">
                    Vos questions, nos réponses.
                </h2>
                <p class="text-lg text-[#666666]">
                    Tout ce que vous devez savoir avant d'essayer ou d'acheter votre véhicule d'occasion chez Reinex.
                </p>
            </div>

            <!-- Liste des 8 questions en accordéon -->
            <div class="space-y-3.5">
                @foreach ($faqs as $faq)
                    <x-faq-item
                        :id="$faq['id']"
                        :question="$faq['question']"
                        :answer="$faq['answer']"
                    />
                @endforeach
            </div>

            <!-- Bloc contact d'aide -->
            <div class="mt-12 text-center text-sm text-[#666666]">
                Une autre question ? Nos conseillers sont joignables directement par téléphone ou WhatsApp.
                <div class="mt-3 flex justify-center gap-4">
                    <a href="tel:{{ $contacts['phone'] ?? '+33189000000' }}" class="font-bold text-black hover:text-[#FF0000] underline">
                        Appeler le {{ $contacts['phone_display'] ?? '01 89 00 00 00' }}
                    </a>
                    <span>·</span>
                    <a href="https://wa.me/{{ $contacts['whatsapp'] ?? '33189000000' }}" target="_blank" rel="noopener" class="font-bold text-emerald-600 hover:underline">
                        Écrire sur WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         9. APPEL FINAL À L'ACTION
         ======================================================== --}}
    <section class="py-16 md:py-24 bg-[#000000] text-white relative overflow-hidden">
        <!-- Accent rouge géométrique discret -->
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#FF0000]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#FF0000] text-white uppercase tracking-wider mb-6">
                DISPONIBILITÉS LIMITÉES
            </span>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white font-heading tracking-tight mb-6 max-w-3xl mx-auto">
                Les meilleures occasions partent vite. Réservez la vôtre aujourd’hui.
            </h2>

            <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                Chaque semaine, nos véhicules les plus demandés trouvent preneur en quelques jours. Ne laissez pas votre voiture idéale vous échapper.
            </p>

            <!-- 3 Boutons d'action : Principal rouge, secondaire blanc, bouton WhatsApp -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-xl mx-auto">
                <button 
                    type="button" 
                    @click="$store.leadModal.openTestDrive()"
                    class="w-full sm:w-auto px-8 py-4 bg-[#FF0000] hover:bg-[#CC0000] text-white font-bold rounded-[10px] transition-colors shadow-lg shadow-red-900/30 text-base"
                >
                    Réserver un essai gratuit
                </button>

                <a 
                    href="tel:{{ $contacts['phone'] ?? '+33189000000' }}"
                    class="w-full sm:w-auto px-7 py-4 bg-white text-black hover:bg-gray-100 font-bold rounded-[10px] transition-colors text-base"
                >
                    Nous appeler
                </a>

                <a 
                    href="https://wa.me/{{ $contacts['whatsapp'] ?? '33189000000' }}?text={{ urlencode('Bonjour Reinex, je souhaite réserver un essai ou avoir des renseignements sur vos véhicules disponibles.') }}" 
                    target="_blank" 
                    rel="noopener"
                    class="w-full sm:w-auto px-6 py-4 bg-[#25D366] hover:bg-[#1EBE5D] text-white font-bold rounded-[10px] transition-colors text-base flex items-center justify-center gap-2"
                >
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.301-.15-1.78-.878-2.056-.979-.275-.1-.475-.15-.675.15-.2.3-.775.979-.95 1.179-.175.2-.35.225-.65.075-.3-.15-1.267-.467-2.413-1.49-1.043-.93-1.748-2.079-1.953-2.43-.205-.351-.022-.541.128-.691.135-.135.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525s-.675-1.628-.925-2.23c-.243-.585-.49-.506-.675-.515-.175-.009-.375-.011-.575-.011s-.525.075-.8.375c-.275.3-1.05 1.028-1.05 2.508 0 1.48 1.075 2.91 1.225 3.11.15.2 2.115 3.23 5.123 4.53.716.31 1.275.495 1.71.633.719.229 1.373.197 1.89.12.578-.087 1.78-.727 2.03-1.43.25-.702.25-1.303.175-1.43-.075-.127-.275-.202-.575-.352z"/>
                    </svg>
                    <span>Écrire sur WhatsApp</span>
                </a>
            </div>

            <!-- Micro-texte de réassurance finale -->
            <p class="mt-6 text-xs text-gray-400">
                Réponse en moins de 24 h · Sans engagement · Rendez-vous sur mesure
            </p>
        </div>
    </section>

</x-layouts.app>
