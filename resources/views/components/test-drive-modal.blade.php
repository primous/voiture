@props([
    'vehicles' => [],
])

<div 
    x-show="$store.leadModal.open" 
    x-cloak
    class="fixed inset-0 z-50 overflow-y-auto"
    role="dialog"
    aria-modal="true"
    aria-labelledby="modal-headline"
    @keydown.escape.window="$store.leadModal.close()"
>
    <!-- Overlay noir semi-transparent -->
    <div 
        x-show="$store.leadModal.open"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/75 transition-opacity"
        @click="$store.leadModal.close()"
    ></div>

    <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-6">
        <div 
            x-show="$store.leadModal.open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative transform overflow-hidden rounded-[20px] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-[#E5E5E5]"
            @click.away="$store.leadModal.close()"
            x-data="{
                submitted: false,
                fullName: '',
                phone: '',
                vehicleWanted: '',
                hasTradeIn: false,
                datePref: '',
                loading: false,
                submitForm() {
                    this.loading = true;
                    setTimeout(() => {
                        this.loading = false;
                        this.submitted = true;
                    }, 600);
                }
            }"
            x-init="$watch('$store.leadModal.vehicleTitle', value => vehicleWanted = value)"
        >
            <!-- Bouton de fermeture -->
            <button 
                type="button" 
                @click="$store.leadModal.close()"
                class="absolute top-4 right-4 text-gray-400 hover:text-black p-2 rounded-full hover:bg-gray-100 transition-colors focus:outline-none"
                aria-label="Fermer la boîte de dialogue"
            >
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Contenu normal (Formulaire) -->
            <template x-if="!submitted">
                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-[#FFF0F0] text-[#FF0000]">
                            Sans engagement
                        </span>
                        <span class="text-xs text-[#666666]">
                            Réponse sous 24h
                        </span>
                    </div>

                    <h3 class="text-2xl font-extrabold text-black font-heading tracking-tight" id="modal-headline">
                        <span x-text="$store.leadModal.purpose === 'reprise' ? 'Estimation reprise & Essai' : 'Réserver votre essai gratuit'"></span>
                    </h3>
                    
                    <p class="mt-2 text-sm text-[#666666]">
                        Prenez le volant l'esprit tranquille. Notre équipe prépare le véhicule désinfecté, contrôlé et vous réserve un créneau dédié.
                    </p>

                    <form @submit.prevent="submitForm()" class="mt-6 space-y-4">
                        <!-- Choix du véhicule -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-black mb-1">
                                Véhicule concerné
                            </label>
                            <input 
                                type="text" 
                                x-model="vehicleWanted"
                                required
                                placeholder="Ex: Peugeot 3008 GT ou Tout le stock"
                                class="w-full px-4 py-3 rounded-[10px] border border-[#E5E5E5] text-sm focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none"
                            >
                        </div>

                        <!-- Nom complet -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-black mb-1">
                                Votre nom et prénom
                            </label>
                            <input 
                                type="text" 
                                x-model="fullName"
                                required
                                placeholder="Ex: Marc Dupont"
                                class="w-full px-4 py-3 rounded-[10px] border border-[#E5E5E5] text-sm focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none"
                            >
                        </div>

                        <!-- Téléphone / WhatsApp -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-black mb-1">
                                Numéro de téléphone (Appel ou WhatsApp)
                            </label>
                            <input 
                                type="tel" 
                                x-model="phone"
                                required
                                placeholder="Ex: 06 12 34 56 78"
                                class="w-full px-4 py-3 rounded-[10px] border border-[#E5E5E5] text-sm focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none"
                            >
                        </div>

                        <!-- Case à cocher reprise -->
                        <div class="flex items-center gap-2.5 pt-1">
                            <input 
                                type="checkbox" 
                                id="hasTradeIn" 
                                x-model="hasTradeIn"
                                class="w-4 h-4 rounded text-[#FF0000] focus:ring-[#FF0000] border-gray-300"
                            >
                            <label for="hasTradeIn" class="text-xs text-neutral-700 font-medium cursor-pointer">
                                Je souhaite également une estimation de reprise de mon ancien véhicule
                            </label>
                        </div>

                        <div class="pt-3">
                            <button 
                                type="submit" 
                                :disabled="loading"
                                class="w-full py-4 px-6 bg-[#FF0000] text-white font-bold rounded-[10px] hover:bg-[#CC0000] transition-colors shadow-md flex items-center justify-center gap-2 cursor-pointer disabled:opacity-50"
                            >
                                <svg x-show="loading" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                </svg>
                                <span x-text="loading ? 'Envoi de votre demande...' : 'Confirmer mon rendez-vous d\'essai'"></span>
                            </button>
                        </div>

                        <p class="text-[11px] text-center text-gray-400 pt-2">
                            🔒 Vos données restent strictement confidentielles. Aucun spam.
                        </p>
                    </form>
                </div>
            </template>

            <!-- Message de confirmation après soumission -->
            <template x-if="submitted">
                <div class="p-8 text-center space-y-4">
                    <div class="w-16 h-16 bg-[#FFF0F0] text-[#FF0000] rounded-full mx-auto flex items-center justify-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-extrabold text-black font-heading">
                        Demande reçue avec succès !
                    </h3>

                    <p class="text-sm text-[#666666] leading-relaxed max-w-sm mx-auto">
                        Merci <span class="font-bold text-black" x-text="fullName"></span>. Un conseiller Reinex va vous contacter sous 24h au <span class="font-bold text-black" x-text="phone"></span> pour valider votre créneau d'essai pour le véhicule <span class="font-bold text-[#FF0000]" x-text="vehicleWanted"></span>.
                    </p>

                    <div class="pt-4">
                        <button 
                            type="button" 
                            @click="$store.leadModal.close(); submitted = false;"
                            class="px-6 py-2.5 bg-black text-white text-sm font-semibold rounded-[8px] hover:bg-neutral-800 transition-colors"
                        >
                            Fermer
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
