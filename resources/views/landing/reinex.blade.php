<!DOCTYPE html>
<html lang="fr" class="scroll-smooth antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO & Métadonnées officielles Reinex Automobile -->
    <title>Reinex Automobile | Voitures d'occasion vérifiées, garanties & prêtes à rouler</title>
    <meta name="description" content="Votre prochaine voiture est ici, vérifiée, garantie, prête à rouler. Fini les mauvaises surprises. Chez Reinex, chaque véhicule est contrôlé en 50 points avant d'être proposé.">
    <meta name="keywords" content="voiture occasion verifiee, occasion garantie, audit 50 points, reinex automobile, vente voiture occasion">
    <meta name="robots" content="index, follow">

    <!-- Open Graph & Twitter -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Reinex Automobile | Voitures d'occasion vérifiées & garanties">
    <meta property="og:description" content="Fini les mauvaises surprises. Chez Reinex, chaque véhicule est contrôlé en 50 points avant d'être proposé.">
    <meta property="og:image" content="{{ asset('images/hero-couple.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/reinex-logo.png') }}">

    <!-- Typographies Officielles REINEX : INTER & MONTSERRAT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS / Laravel Vite ou CDN fallback -->
    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            reinex: {
                                white: '#FFFFFF',
                                black: '#000000',
                                dark: '#111111',
                                red: '#FF0000',
                                'red-hover': '#CC0000',
                                'red-light': '#FFE5E5',
                                'gray-bg': '#F9F9F9',
                                'gray-light': '#F5F5F5',
                                'gray-text': '#555555',
                                border: '#E5E5E0',
                            }
                        },
                        fontFamily: {
                            heading: ['Inter', 'sans-serif'],
                            body: ['Montserrat', 'sans-serif'],
                            sans: ['Montserrat', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @endif

    <style>
        /* Charte 70% Blanc / 20% Noir / 10% Rouge */
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            line-height: 1.6;
            color: #000000;
            background-color: #FFFFFF;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Inter', sans-serif;
            letter-spacing: -0.025em;
        }

        .btn-reinex-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 48px;
            padding-left: 28px;
            padding-right: 28px;
            border-radius: 9999px;
            background-color: #FF0000;
            color: #FFFFFF;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 15px;
            line-height: 1.1;
            text-decoration: none;
            box-shadow: 0 4px 18px rgba(255, 0, 0, 0.22);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
        }
        .btn-reinex-primary:hover {
            background-color: #CC0000;
            transform: translateY(-1px) scale(1.02);
            box-shadow: 0 8px 24px rgba(255, 0, 0, 0.35);
        }

        .btn-reinex-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 48px;
            padding-left: 28px;
            padding-right: 28px;
            border-radius: 9999px;
            background-color: #000000;
            color: #FFFFFF;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 15px;
            line-height: 1.1;
            text-decoration: none;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
        }
        .btn-reinex-secondary:hover {
            background-color: #222222;
            transform: translateY(-1px) scale(1.01);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
        }

        .btn-reinex-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 46px;
            padding-left: 24px;
            padding-right: 24px;
            border-radius: 9999px;
            background-color: transparent;
            color: #000000;
            border: 2px solid #000000;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 14px;
            line-height: 1.1;
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
            white-space: nowrap;
        }
        .btn-reinex-outline:hover {
            background-color: #000000;
            color: #FFFFFF;
        }

        .reinex-card {
            background-color: #FFFFFF;
            border: 1px solid #E5E5E0;
            border-radius: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04), 0 8px 24px rgba(0, 0, 0, 0.04);
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s ease, border-color 0.25s ease;
        }
        .reinex-card:hover {
            border-color: #000000;
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        [x-cloak] { display: none !important; }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 35s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body 
    x-data="{ 
        mobileMenu: false, 
        modalOpen: false, 
        selectedCar: 'Peugeot 3008 GT Line',
        activeFaq: 1,
        showScrollTop: false,
        testimonials: [
            {
                title: 'Reinex m\'a vraiment facilité la vie',
                text: 'J\'avais besoin de comparer les prix rapidement. En quelques clics, j\'ai pu voir toutes les offres et choisir celle qui me convenait. Franchement, c\'est nickel.',
                author: 'Pascal ADANDÉGLA',
                info: 'Achat Peugeot 3008 · Client vérifié',
                initials: 'PA'
            },
            {
                title: 'Simple et sans prise de tête',
                text: 'Franchement, je m\'attendais à galérer, mais tout était clair. J\'ai rempli les infos, comparé les offres, et j\'ai choisi. Aucun déplacement inutile, aucune paperasse.',
                author: 'Jean-Joseph DAGBA',
                info: 'Achat Mercedes Classe A · Reprise intégrée',
                initials: 'JD'
            },
            {
                title: 'Reinex m\'a vraiment facilité la vie',
                text: 'Je suis souvent au bureau et me déplacer pour une occasion, c\'est toujours compliqué. Avec Reinex, j\'ai comparé directement en ligne. Une tranquillité d\'esprit totale.',
                author: 'Marie Claire AFFOGNON',
                info: 'Achat Audi Q7 · Financement sur-mesure',
                initials: 'MA'
            }
        ],
        openModal(car = 'Peugeot 3008 GT Line') {
            this.selectedCar = car;
            this.modalOpen = true;
        },
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }"
    @scroll.window="showScrollTop = (window.pageYOffset > 250)"
    :class="{'overflow-hidden': mobileMenu || modalOpen}"
    class="bg-white text-black selection:bg-[#FF0000] selection:text-white min-h-screen flex flex-col font-body"
>

    <!-- HEADER SANS AUDIT 50, SANS FAQ, SANS NUMÉRO SUR ORDINATEUR -->
    <header class="min-h-[88px] lg:min-h-[96px] bg-white items-center shadow-sm py-4 fixed flex justify-center w-full z-50 border-b border-[#E5E5E0] backdrop-blur-md bg-white/98">
        <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            
            <a href="#" class="flex items-center flex-shrink-0 group" aria-label="Accueil Reinex Automobile">
                <img 
                    src="{{ asset('images/reinex-logo.png') }}" 
                    alt="Logo Reinex Automobile" 
                    class="h-9 sm:h-10 w-auto object-contain transition-transform duration-200 group-hover:scale-105"
                >
            </a>

            <!-- Menu ordinateur parfait -->
            <nav class="hidden lg:flex items-center gap-8 text-[15px] font-semibold text-black">
                <a href="#hero" class="text-[#FF0000] border-b-2 border-[#FF0000] pb-1 transition-all">Accueil</a>
                <a href="#offres" class="hover:text-[#FF0000] hover:border-b-2 hover:border-[#FF0000] pb-1 transition-all">Stock certifié</a>
                <a href="#benefices" class="hover:text-[#FF0000] hover:border-b-2 hover:border-[#FF0000] pb-1 transition-all">Garanties</a>
                <a href="#prescripteur" class="hover:text-[#FF0000] hover:border-b-2 hover:border-[#FF0000] pb-1 transition-all">Partenaires</a>
                <a href="#contact" class="hover:text-[#FF0000] hover:border-b-2 hover:border-[#FF0000] pb-1 transition-all">Contact</a>
            </nav>

            <!-- Actions droite Ordinateur -->
            <div class="hidden sm:flex items-center gap-4">
                <div class="inline-flex items-center gap-2 px-3.5 py-2 text-sm font-semibold text-black bg-white hover:bg-[#F5F5F5] border border-[#E5E5E0] hover:border-black rounded-full transition-all shadow-sm cursor-pointer">
                    <span class="text-base leading-none">🇫🇷</span>
                    <span class="text-xs uppercase tracking-wider font-bold">fr</span>
                    <svg class="w-3.5 h-3.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <button 
                    type="button"
                    @click="openModal('Demande générale')" 
                    class="btn-reinex-primary !h-[44px] !px-6 text-[14px]"
                >
                    Réserver un essai
                </button>
            </div>

            <!-- Hamburger mobile interactif -->
            <button 
                type="button" 
                @click="mobileMenu = true"
                class="lg:hidden p-2 text-black hover:text-[#FF0000] focus:outline-none focus:ring-2 focus:ring-[#FF0000] rounded-lg transition-colors cursor-pointer"
                aria-label="Ouvrir le menu mobile"
            >
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- TIROIR MOBILE WAYI.BJ (100% FIDÈLE À LA CAPTURE ÉCRAN FOURNIE) -->
    <div 
        x-show="mobileMenu" 
        x-cloak 
        class="fixed inset-0 z-[9999] lg:hidden flex justify-end"
        role="dialog"
        aria-modal="true"
        aria-label="Menu principal de navigation"
    >
        <div 
            x-show="mobileMenu"
            x-transition:enter="transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="mobileMenu = false"
            class="fixed inset-0 bg-black/60 backdrop-blur-sm cursor-pointer"
            aria-hidden="true"
        ></div>

        <div 
            x-show="mobileMenu"
            x-transition:enter="transition transform ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform ease-in duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="relative ml-auto w-[82%] max-w-[340px] bg-white h-full shadow-2xl flex flex-col justify-between overflow-y-auto z-10 font-body"
        >
            <div>
                <div class="flex items-center justify-between px-6 py-5 border-b border-[#E5E5E0]">
                    <a href="#" @click="mobileMenu = false" class="flex items-center">
                        <img src="{{ asset('images/reinex-logo.png') }}" alt="Reinex Automobile" class="h-8 w-auto object-contain">
                    </a>
                    <button 
                        type="button"
                        @click="mobileMenu = false" 
                        class="p-2 -mr-2 text-black hover:text-[#FF0000] focus:outline-none transition-colors cursor-pointer"
                        aria-label="Fermer le menu"
                    >
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="px-4 py-4 space-y-1">
                    <!-- 1. Comparer les offres (Actif) -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#offres" 
                        class="flex items-center gap-4 px-3.5 py-3 rounded-2xl bg-[#FFE5E5] text-[#FF0000] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-white text-[#FF0000] flex items-center justify-center shrink-0 shadow-xs">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3v18" />
                                <path d="M4 7l8-4 8 4" />
                                <path d="M3 13l3-6 3 6a3 3 0 0 1-6 0Z" />
                                <path d="M15 13l3-6 3 6a3 3 0 0 1-6 0Z" />
                                <path d="M8 21h8" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-semibold text-[#FF0000]">Comparer les offres</span>
                    </a>

                    <!-- 2. Vérifier une assurance -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#audit" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Vérifier une assurance</span>
                    </a>

                    <!-- 3. FAQ -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#faq" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">FAQ</span>
                    </a>

                    <!-- 4. Contact -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#contact" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Contact</span>
                    </a>

                    <!-- 5. Déclarer un sinistre -->
                    <a 
                        @click="mobileMenu = false; openModal('Déclaration de sinistre / SAV')" 
                        href="javascript:void(0)" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors cursor-pointer"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z" />
                                <path d="M12 9v4" />
                                <path d="M12 17h.01" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Déclarer un sinistre</span>
                    </a>

                    <!-- 6. Blog -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#temoignages" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                                <path d="M18 14h-8" />
                                <path d="M15 18h-5" />
                                <path d="M10 6h8v4h-8V6Z" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Blog</span>
                    </a>

                    <!-- Séparateur -->
                    <div class="my-3 mx-2 border-t border-[#E5E5E0]"></div>

                    <!-- 7. Espace client -->
                    <a 
                        @click="mobileMenu = false; openModal('Connexion Espace Client')" 
                        href="javascript:void(0)" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors cursor-pointer"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Espace client</span>
                    </a>

                    <!-- 8. Espace prescripteur -->
                    <a 
                        @click="mobileMenu = false" 
                        href="#prescripteur" 
                        class="group flex items-center gap-4 px-3.5 py-3 rounded-2xl hover:bg-[#F5F5F5] transition-colors"
                    >
                        <div class="w-10 h-10 rounded-xl bg-[#F5F5F5] group-hover:bg-[#FFE5E5] text-black group-hover:text-[#FF0000] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="14" x="2" y="7" rx="2" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                            </svg>
                        </div>
                        <span class="text-[15.5px] font-medium text-[#222222] group-hover:text-black">Espace prescripteur</span>
                    </a>
                </nav>
            </div>

            <div class="p-5 border-t border-[#E5E5E0] space-y-3 bg-white">
                <button 
                    type="button"
                    @click="mobileMenu = false; openModal('Demande générale')" 
                    class="btn-reinex-primary w-full text-center !h-[48px] text-[15px]"
                >
                    Réserver un essai gratuit
                </button>
            </div>
        </div>
    </div>

    <main class="flex-grow pt-[88px] lg:pt-[96px]">

        <!-- HERO SECTION -->
        <section id="hero" class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden min-h-[50vh] lg:min-h-[75vh] bg-white border-b border-[#E5E5E0]">
            <div class="flex items-center justify-center order-2 lg:order-1 px-4 sm:px-8 lg:px-16 py-16 sm:py-24">
                <div class="max-w-xl text-left">
                    <h1 class="font-heading text-4xl sm:text-5xl lg:text-[54px] font-extrabold tracking-tight text-black leading-[1.08]">
                        Votre prochaine voiture est ici, vérifiée, garantie, prête à rouler.
                    </h1>

                    <p class="font-body mt-6 text-xl sm:text-2xl font-medium text-[#555555] leading-relaxed">
                        Fini les mauvaises surprises. Chez Reinex, chaque véhicule est contrôlé en 50 points avant d'être proposé.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="#offres" class="btn-reinex-primary !px-8 text-base">
                            Comparer les véhicules certifiés
                        </a>

                        <button 
                            type="button" 
                            @click="openModal('Essai immédiat')" 
                            class="btn-reinex-secondary !px-8 text-base"
                        >
                            Réserver un essai gratuit
                        </button>
                    </div>
                </div>
            </div>

            <div class="relative bg-[#F5F5F5] min-h-[50vh] lg:min-h-[75vh] order-1 lg:order-2 overflow-hidden">
                <img 
                    src="{{ asset('images/hero-couple.jpg') }}" 
                    alt="Clients satisfaits découvrant leur véhicule certifié Reinex" 
                    class="absolute inset-0 h-full w-full object-cover -translate-x-0 transform"
                    loading="eager"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent lg:hidden"></div>

                <!-- Bulle signature Wayi.bj -->
                <div class="absolute z-20 pointer-events-none select-none top-[52%] left-4 sm:left-8 lg:left-10 max-w-[320px]">
                    <div class="relative">
                        <div class="absolute w-9 h-8 sm:w-[46px] sm:h-10 bg-white" style="bottom:0px;right:-8px;clip-path:polygon(0 0, 100% 100%, 0 92%);"></div>
                        <div class="relative bottom-1 right-1 bg-white rounded-[24px] sm:rounded-[30px] rounded-br-[10px] shadow-2xl p-[7px] sm:p-[9px] border border-[#E5E5E0]">
                            <div class="rounded-[18px] sm:rounded-[22px] bg-[#F9F9F9] backdrop-blur-md px-3.5 py-3 border border-[#E5E5E0]/60">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="shrink-0 size-[24px] sm:size-[26px] rounded-lg bg-[#FF0000] flex items-center justify-center text-white text-xs">
                                        🚘
                                    </div>
                                    <span class="font-heading text-xs font-extrabold uppercase tracking-wider text-black">Reinex Certifié</span>
                                </div>
                                <p class="font-heading text-xs sm:text-[15px] font-bold text-black leading-tight">
                                    Audité en 50 points chrono
                                </p>
                                <p class="font-body text-[12px] sm:text-[13px] text-[#555555] leading-snug mt-1">
                                    Devis transparent, essai offert et attestation : tout est garanti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES & OFFRES -->
        <section id="offres" class="py-20 lg:py-32 bg-[#F9F9F9] border-b border-[#E5E5E0] scroll-mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-14 text-left">
                    <div class="max-w-3xl">
                        <p class="font-heading text-xs sm:text-sm font-bold uppercase tracking-wider text-[#FF0000]">
                            SERVICES AUTOMOBILES
                        </p>
                        <h2 class="font-heading mt-2 text-4xl sm:text-5xl font-extrabold tracking-tight text-black">
                            Ne signez plus sans comprendre. <span class="text-[#FF0000]">Comparez !</span>
                        </h2>
                        <p class="font-body mt-3 text-lg text-[#555555]">
                            Acheter une occasion ne devrait pas être un pari. Chez Reinex, chaque véhicule est inspecté en 50 points et garanti contractuellement.
                        </p>
                    </div>

                    <div class="flex justify-start lg:justify-end">
                        <a href="#offres" class="btn-reinex-outline text-sm sm:text-base">
                            Voir plus d'offres certifiées
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="reinex-card p-5 flex flex-col text-left cursor-pointer group">
                        <div class="relative rounded-xl bg-[#F5F5F5] h-40 mb-5 overflow-hidden flex items-center justify-center">
                            <span class="absolute z-10 top-3 right-3 px-3 py-1 rounded-full text-[11px] font-bold uppercase bg-[#FF0000] text-white">
                                Populaire
                            </span>
                            <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0">
                                <span class="text-4xl">🚗</span>
                            </div>
                            <div class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <img src="{{ asset('images/car-peugeot.jpg') }}" alt="Berlines & Citadines" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl text-[#FF0000]">🚘</span>
                            <h3 class="font-heading text-lg font-bold text-black">Berlines & Citadines</h3>
                        </div>
                        <p class="font-body text-sm text-[#555555] flex-grow mb-5 leading-relaxed">
                            Véhicules urbains audités en 50 points, parfaits pour vos trajets quotidiens sans mauvaise surprise.
                        </p>

                        <button 
                            type="button" 
                            @click="openModal('Berlines & Citadines')"
                            class="btn-reinex-primary !h-[44px] !w-full text-sm"
                        >
                            Comparer les offres
                        </button>
                    </div>

                    <div class="reinex-card p-5 flex flex-col text-left cursor-pointer group">
                        <div class="relative rounded-xl bg-[#F5F5F5] h-40 mb-5 overflow-hidden flex items-center justify-center">
                            <span class="absolute z-10 top-3 right-3 px-3 py-1 rounded-full text-[11px] font-bold uppercase bg-black text-white">
                                Bientôt
                            </span>
                            <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0">
                                <span class="text-4xl">🚙</span>
                            </div>
                            <div class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <img src="{{ asset('images/hero-car.jpg') }}" alt="SUV & Familiales" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl text-black">🚙</span>
                            <h3 class="font-heading text-lg font-bold text-black">SUV & Familiales</h3>
                        </div>
                        <p class="font-body text-sm text-[#555555] flex-grow mb-5 leading-relaxed">
                            Espace, confort et sécurité renforcée pour voyager l'esprit serein avec toute votre famille.
                        </p>

                        <button 
                            type="button" 
                            @click="openModal('SUV & Familiales')"
                            class="btn-reinex-secondary !h-[44px] !w-full text-sm"
                        >
                            Bientôt disponible
                        </button>
                    </div>

                    <div class="reinex-card p-5 flex flex-col text-left cursor-pointer group">
                        <div class="relative rounded-xl bg-[#F5F5F5] h-40 mb-5 overflow-hidden flex items-center justify-center">
                            <span class="absolute z-10 top-3 right-3 px-3 py-1 rounded-full text-[11px] font-bold uppercase bg-black text-white">
                                Bientôt
                            </span>
                            <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0">
                                <span class="text-4xl">🚛</span>
                            </div>
                            <div class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <img src="{{ asset('images/handover-keys.jpg') }}" alt="Utilitaires professionnels" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl text-black">🚛</span>
                            <h3 class="font-heading text-lg font-bold text-black">Utilitaires & Pro</h3>
                        </div>
                        <p class="font-body text-sm text-[#555555] flex-grow mb-5 leading-relaxed">
                            Solutions pour artisans et professionnels avec TVA récupérable et révision mécanique certifiée.
                        </p>

                        <button 
                            type="button" 
                            @click="openModal('Utilitaires & Pro')"
                            class="btn-reinex-secondary !h-[44px] !w-full text-sm"
                        >
                            Bientôt disponible
                        </button>
                    </div>

                    <div class="reinex-card p-5 flex flex-col text-left cursor-pointer group">
                        <div class="relative rounded-xl bg-[#F5F5F5] h-40 mb-5 overflow-hidden flex items-center justify-center">
                            <span class="absolute z-10 top-3 right-3 px-3 py-1 rounded-full text-[11px] font-bold uppercase bg-black text-white">
                                Bientôt
                            </span>
                            <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0">
                                <span class="text-4xl">⚡</span>
                            </div>
                            <div class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <img src="{{ asset('images/car-mercedes.jpg') }}" alt="Hybrides & Électriques" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            </div>
                        </div>

                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl text-[#FF0000]">⚡</span>
                            <h3 class="font-heading text-lg font-bold text-black">Hybrides & Électriques</h3>
                        </div>
                        <p class="font-body text-sm text-[#555555] flex-grow mb-5 leading-relaxed">
                            Contrôle rigoureux de la batterie de traction (SoH) et mobilités propres certifiées Crit'Air 1.
                        </p>

                        <button 
                            type="button" 
                            @click="openModal('Hybrides & Électriques')"
                            class="btn-reinex-secondary !h-[44px] !w-full text-sm"
                        >
                            Bientôt disponible
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- MULTIMARQUES & CHECKLIST -->
        <section class="py-20 lg:py-28 bg-white border-b border-[#E5E5E0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12 my-6">
                    <div class="max-w-xl text-left">
                        <h3 class="font-heading text-3xl sm:text-4xl font-extrabold tracking-tight text-black">
                            Un seul endroit. Les plus grands modèles.
                        </h3>
                        <p class="font-body mt-4 text-lg text-[#555555] leading-relaxed">
                            Choisissez le modèle et la formule qui vous conviennent. Vous êtes libres !
                        </p>
                    </div>

                    <ul class="space-y-5 max-w-lg w-full text-black">
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#FFE5E5] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#FF0000]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-body text-base font-medium text-black">Des rapports clairs en 50 points pour bien choisir.</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#FFE5E5] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#FF0000]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-body text-base font-medium text-black">Réservez un créneau d'essai en quelques secondes, directement depuis votre téléphone.</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#FFE5E5] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#FF0000]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-body text-base font-medium text-black">Trouvez la voiture fiable adaptée à votre poche.</span>
                        </li>
                    </ul>
                </div>

                <div class="relative flex items-center overflow-hidden mt-16 before:absolute before:pointer-events-none before:z-10 before:left-0 before:top-0 before:bottom-0 before:w-1/4 before:bg-gradient-to-r before:from-white before:to-transparent after:absolute after:pointer-events-none after:z-10 after:right-0 after:top-0 after:bottom-0 after:w-1/4 after:bg-gradient-to-l after:from-white after:to-transparent">
                    <div class="animate-marquee gap-16 items-center py-4">
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">PEUGEOT</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">MERCEDES-BENZ</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">AUDI</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">VOLKSWAGEN</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">RENAULT</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">TOYOTA</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">BMW</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">TESLA</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">PEUGEOT</span>
                        <span class="font-heading text-2xl font-black text-gray-400 tracking-wider uppercase hover:text-black transition-colors">MERCEDES-BENZ</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION CONTRASTÉE 20% NOIR -->
        <section id="benefices" class="min-h-[75vh] flex flex-col justify-center items-center px-4 sm:px-6 py-20 lg:py-28 lg:px-24 bg-black scroll-mt-16 text-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-8 items-center w-full">
                <div class="relative pb-24 lg:pb-0 flex flex-col justify-center items-center lg:items-start lg:px-8 order-2 lg:order-1">
                    <img 
                        src="{{ asset('images/inspection-point.jpg') }}" 
                        alt="Audit technique approfondi en atelier" 
                        class="h-[55vh] rounded-2xl z-0 w-full max-w-[420px] object-cover shadow-2xl border border-white/10"
                        loading="lazy"
                    >

                    <div class="absolute block lg:bottom-1/6 -bottom-10 lg:-right-4 mx-3 bg-white shadow-2xl p-5 sm:p-6 w-[calc(100%-1.5rem)] max-w-[360px] rounded-2xl text-black border border-[#E5E5E0]">
                        <div class="p-3.5 bg-[#F5F5F5] flex items-center gap-3 justify-start rounded-xl text-sm font-semibold">
                            <div class="h-3 w-3 bg-[#FF0000] rounded-full shrink-0"></div>
                            <div>Audit 50 points certifié & transparent</div>
                        </div>

                        <div class="p-3.5 bg-white flex items-center gap-3 justify-start rounded-xl text-sm font-semibold mt-3 border border-[#E5E5E0]">
                            <div class="h-3 w-3 bg-black rounded-full shrink-0"></div>
                            <div>Historique clair & kilométrage 100% garanti</div>
                        </div>

                        <div class="p-3.5 text-black bg-[#FFE5E5] flex items-center gap-3 justify-start rounded-xl text-sm font-bold mt-3">
                            <div class="h-3 w-3 bg-[#CC0000] rounded-full shrink-0"></div>
                            <div>Garantie mécanique 12 mois pièces & MO</div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 text-left lg:pl-10">
                    <div class="hidden lg:block mb-6">
                        <div class="w-16 h-1 bg-[#FF0000] rounded-full"></div>
                    </div>

                    <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight mb-4">
                        Finis le stress. Votre achat <br><span class="text-[#FF0000]">est sécurisé.</span>
                    </h2>

                    <p class="font-body text-lg sm:text-xl text-white font-medium mb-4 leading-relaxed">
                        Choisissez et essayez votre véhicule, sans bouger de chez vous.
                    </p>

                    <p class="font-body text-base text-gray-300 mb-8 leading-relaxed max-w-xl">
                        Pannes cachées, vices dissimulés ou kilométrages suspects : ça arrive ailleurs. Chez Reinex, nos techniciens auscultent chaque voiture avant la mise en vente. Suivez l'avancement de votre dossier en temps réel, en toute transparence.
                    </p>

                    <div>
                        <button 
                            type="button" 
                            @click="openModal('Garantie et audit 50 points')"
                            class="btn-reinex-primary !px-8 text-base"
                        >
                            Découvrir nos garanties
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- TEMOIGNAGES -->
        <section id="avis" class="py-20 lg:py-28 bg-[#F9F9F9] border-b border-[#E5E5E0]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center flex flex-col justify-center mb-16">
                    <h2 class="font-heading text-xs sm:text-sm font-bold text-gray-500 tracking-wider uppercase">
                        TEMOIGNAGES
                    </h2>
                    <hr class="w-20 mx-auto my-3 border-t-2 border-[#FF0000]">
                    <p class="font-heading mt-2 text-3xl sm:text-4xl lg:text-5xl text-black font-extrabold tracking-tight">
                        Ils ont trouvé la bonne voiture. Pourquoi pas vous ?
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <template x-for="(t, index) in testimonials" :key="index">
                        <div class="reinex-card p-6 sm:p-7 flex flex-col justify-between text-left">
                            <div>
                                <h3 class="font-heading text-lg font-bold text-black mb-3" x-text="t.title"></h3>
                                <p class="font-body text-sm sm:text-base text-[#555555] leading-relaxed" x-text="t.text"></p>
                            </div>

                            <div class="mt-8 pt-5 border-t border-[#E5E5E0] flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div 
                                        class="w-10 h-10 rounded-full bg-[#FFE5E5] text-[#FF0000] flex items-center justify-center font-heading font-bold text-sm"
                                        x-text="t.initials"
                                    ></div>
                                    <div>
                                        <p class="font-heading font-bold text-sm text-black" x-text="t.author"></p>
                                        <p class="font-body text-xs text-gray-500" x-text="t.info"></p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-[#FF0000] bg-[#FFE5E5] px-2.5 py-1 rounded-full">
                                    ★ 5.0
                                </span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- PARTENAIRES & PRESCRIPTEURS -->
        <section id="prescripteur" class="bg-white py-20 lg:py-28 px-4 sm:px-6 lg:px-8 border-b border-[#E5E5E0] scroll-mt-16">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative text-left">
                    <div class="mb-4">
                        <span class="inline-block px-3.5 py-1 rounded-full bg-[#FFE5E5] text-[#FF0000] text-xs font-bold uppercase tracking-wider">
                            Réseau & Partenariat
                        </span>
                    </div>

                    <div class="relative">
                        <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-black tracking-tight">
                            Vous orientez des clients vers nous ?
                        </h2>
                        <p class="font-heading text-3xl sm:text-4xl text-[#555555] font-normal tracking-tight mt-1 mb-5">
                            Faisons équipe.
                        </p>

                        <p class="font-body text-base sm:text-lg text-[#555555] mb-8 max-w-lg leading-relaxed">
                            Agents, courtiers, professionnels de l'automobile : recommandez Reinex et suivez chaque dossier apporté depuis votre propre espace. Simple, transparent, et rémunérateur.
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button 
                                type="button" 
                                @click="openModal('Devenir prescripteur')"
                                class="btn-reinex-primary !px-7 text-sm sm:text-base"
                            >
                                Devenir prescripteur
                            </button>

                            <button 
                                type="button" 
                                @click="openModal('Connexion espace pro')"
                                class="btn-reinex-secondary !px-7 text-sm sm:text-base"
                            >
                                Se connecter
                            </button>
                        </div>
                    </div>
                </div>

                <div class="pb-16 lg:pb-0 flex justify-center lg:justify-end">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/partner-handshake.jpg') }}" 
                            alt="Poignée de main entre partenaires professionnels" 
                            class="h-[55vh] w-auto max-w-full rounded-2xl object-cover shadow-xl border border-[#E5E5E0]"
                            loading="lazy"
                        >

                        <div class="absolute block text-black lg:bottom-10 lg:-left-20 -bottom-10 left-4 right-4 lg:right-auto bg-white shadow-2xl p-6 rounded-2xl w-full max-w-[340px] border border-[#E5E5E0]">
                            <div class="p-3.5 bg-[#F5F5F5] flex items-center gap-3 justify-start rounded-xl">
                                <div class="h-3 w-3 bg-[#FF0000] rounded-full shrink-0"></div>
                                <div class="font-body text-sm font-semibold">Suivi de vos apports en temps réel</div>
                            </div>
                            <div class="p-3.5 bg-white flex items-center gap-3 justify-start rounded-xl mt-3 border border-[#E5E5E0]">
                                <div class="h-3 w-3 bg-black rounded-full shrink-0"></div>
                                <div class="font-body text-sm font-semibold">Commissions calculées automatiquement</div>
                            </div>
                            <div class="p-3.5 text-black bg-[#FFE5E5] flex items-center gap-3 justify-start rounded-xl mt-3">
                                <div class="h-3 w-3 bg-[#CC0000] rounded-full shrink-0"></div>
                                <div class="font-body text-sm font-bold">Un espace dédié, disponible 24h / 24</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SUPPORT & CONTACT -->
        <section id="contact" class="py-20 lg:py-28 bg-[#F9F9F9] border-b border-[#E5E5E0] scroll-mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                    <div class="text-left">
                        <p class="font-heading text-xs sm:text-sm font-bold uppercase tracking-wider text-[#FF0000] mb-2">
                            SUPPORT & CONSEIL
                        </p>
                        <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold text-black">
                            Besoin d'aide ?
                        </h2>
                        <p class="font-body text-base text-[#555555] mt-4 leading-relaxed max-w-md">
                            Notre équipe est à votre disposition pour vous orienter, expertiser un modèle ou organiser votre essai routier.
                        </p>

                        <div class="flex flex-col space-y-6 mt-8">
                            <div class="flex gap-4 items-center">
                                <div class="w-12 h-12 rounded-full bg-[#FFE5E5] text-[#FF0000] flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-heading text-lg font-bold text-black">+33 1 89 00 00 00</p>
                                    <p class="font-body text-sm text-gray-500">Support direct via WhatsApp</p>
                                </div>
                            </div>

                            <div class="flex gap-4 items-center">
                                <div class="w-12 h-12 rounded-full bg-[#F5F5F5] text-black flex items-center justify-center flex-shrink-0 shadow-sm border border-[#E5E5E0]">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-heading text-lg font-bold text-black">contact@reinex-auto.fr</p>
                                    <p class="font-body text-sm text-gray-500">Support technique & commercial</p>
                                </div>
                            </div>

                            <button 
                                type="button" 
                                @click="openModal('Question au support')" 
                                class="inline-flex items-center font-heading font-bold text-[#FF0000] hover:text-[#CC0000] transition-colors text-base"
                            >
                                <span>Poser une question directement</span>
                                <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-md border border-[#E5E5E0]">
                        <div class="w-full divide-y divide-[#E5E5E0]">
                            <div class="py-4">
                                <button 
                                    type="button" 
                                    @click="activeFaq = (activeFaq === 1 ? null : 1)" 
                                    class="flex w-full cursor-pointer items-center justify-between gap-4 py-2 text-left"
                                >
                                    <span class="font-heading font-bold text-black text-[16px] sm:text-[17px]">Comment puis-je souscrire à une garantie ?</span>
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="2.5" 
                                        stroke="currentColor" 
                                        class="size-5 shrink-0 text-[#FF0000] transition-transform duration-300"
                                        :class="activeFaq === 1 ? 'rotate-45' : 'rotate-0'"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                    </svg>
                                </button>
                                <div x-show="activeFaq === 1" x-cloak class="pt-3 font-body text-sm sm:text-base text-[#555555] leading-relaxed text-left">
                                    Chaque véhicule proposé par Reinex intègre d'office notre garantie contractuelle de 12 mois pièces et main-d'œuvre. Vous pouvez également opter pour une extension jusqu'à 36 mois lors de la remise des clés.
                                </div>
                            </div>

                            <div class="py-4">
                                <button 
                                    type="button" 
                                    @click="activeFaq = (activeFaq === 2 ? null : 2)" 
                                    class="flex w-full cursor-pointer items-center justify-between gap-4 py-2 text-left"
                                >
                                    <span class="font-heading font-bold text-black text-[16px] sm:text-[17px]">Quels sont les moyens de paiement acceptés ?</span>
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="2.5" 
                                        stroke="currentColor" 
                                        class="size-5 shrink-0 text-[#FF0000] transition-transform duration-300"
                                        :class="activeFaq === 2 ? 'rotate-45' : 'rotate-0'"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                    </svg>
                                </button>
                                <div x-show="activeFaq === 2" x-cloak class="pt-3 font-body text-sm sm:text-base text-[#555555] leading-relaxed text-left">
                                    Nous acceptons le virement bancaire sécurisé, le paiement échelonné en 3x ou 4x par carte bancaire, ainsi que le crédit classique avec étude immédiate de votre dossier.
                                </div>
                            </div>

                            <div class="py-4">
                                <button 
                                    type="button" 
                                    @click="activeFaq = (activeFaq === 3 ? null : 3)" 
                                    class="flex w-full cursor-pointer items-center justify-between gap-4 py-2 text-left"
                                >
                                    <span class="font-heading font-bold text-black text-[16px] sm:text-[17px]">Combien de temps pour avoir son contrat et ses clés ?</span>
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="2.5" 
                                        stroke="currentColor" 
                                        class="size-5 shrink-0 text-[#FF0000] transition-transform duration-300"
                                        :class="activeFaq === 3 ? 'rotate-45' : 'rotate-0'"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                    </svg>
                                </button>
                                <div x-show="activeFaq === 3" x-cloak class="pt-3 font-body text-sm sm:text-base text-[#555555] leading-relaxed text-left">
                                    Une fois votre commande validée, le véhicule est nettoyé et préparé pour une mise à disposition sous 24h à 48h ouvrées. La carte grise provisoire vous est transmise sur-le-champ.
                                </div>
                            </div>

                            <div class="py-4">
                                <button 
                                    type="button" 
                                    @click="activeFaq = (activeFaq === 4 ? null : 4)" 
                                    class="flex w-full cursor-pointer items-center justify-between gap-4 py-2 text-left"
                                >
                                    <span class="font-heading font-bold text-black text-[16px] sm:text-[17px]">Après un devis, comment connaître le prix exact de mon véhicule ?</span>
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke-width="2.5" 
                                        stroke="currentColor" 
                                        class="size-5 shrink-0 text-[#FF0000] transition-transform duration-300"
                                        :class="activeFaq === 4 ? 'rotate-45' : 'rotate-0'"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                    </svg>
                                </button>
                                <div x-show="activeFaq === 4" x-cloak class="pt-3 font-body text-sm sm:text-base text-[#555555] leading-relaxed text-left">
                                    Le prix affiché sur le devis est le prix exact que vous paierez. Chez Reinex, il n'y a pas de frais cachés ni de mauvaises surprises au moment de payer. Ce que vous voyez, c'est ce que vous payez.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BANNIÈRE APPEL FINAL STRICT -->
        <section class="py-24 bg-black text-white text-center relative overflow-hidden">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
                <span class="inline-block px-4 py-1.5 rounded-full bg-[#FF0000] text-white text-xs font-bold uppercase tracking-wider mb-6">
                    Véhicules disponibles immédiatement
                </span>

                <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    Les meilleures occasions partent vite. Réservez la vôtre aujourd'hui.
                </h2>

                <p class="font-body text-lg sm:text-xl text-gray-300 mt-5 max-w-2xl mx-auto leading-relaxed">
                    Bloquez votre essai gratuit de 30 minutes sans engagement avant que le modèle ne soit réservé.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button 
                        type="button"
                        @click="openModal('Réservation Prioritaire')" 
                        class="btn-reinex-primary !px-9 !h-[52px] text-base"
                    >
                        Réserver un essai gratuit
                    </button>

                    <a 
                        href="https://wa.me/33189000000?text=Bonjour,%20je%20souhaite%20réserver%20un%20véhicule%20Reinex" 
                        target="_blank" 
                        class="btn-reinex-secondary !px-9 !h-[52px] text-base border border-white/20 hover:border-white"
                    >
                        Échanger sur WhatsApp
                    </a>
                </div>

                <p class="font-body text-xs text-gray-400 mt-6">
                    Réponse sous 24h · 100% sans engagement · 50 points d'audit validés
                </p>
            </div>
        </section>

    </main>

    <!-- FOOTER NOIR STRICT 20% -->
    <footer class="min-h-[137px] justify-center bg-black border-t border-white/10 py-10 px-4 sm:px-6 lg:px-24 text-white">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between">
            <div class="flex flex-col items-center sm:items-start space-y-3 mb-6 sm:mb-0">
                <a href="#" class="inline-block bg-white px-3 py-1.5 rounded-lg">
                    <img src="{{ asset('images/reinex-logo.png') }}" alt="Reinex Automobile" class="h-8 w-auto">
                </a>
                <p class="font-body mt-2 text-sm text-gray-400">© 2026 Reinex Automobile - Tous droits réservés</p>
            </div>

            <div class="flex flex-col items-center sm:items-end justify-end space-y-4">
                <div class="flex items-center justify-end gap-4">
                    <div class="flex justify-end space-x-4 text-gray-400">
                        <a href="#" class="hover:text-[#FF0000] transition-colors" aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02"/></svg>
                        </a>
                        <a href="#" class="hover:text-[#FF0000] transition-colors" aria-label="X">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="hover:text-[#FF0000] transition-colors" aria-label="Instagram">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                        </a>
                        <a href="#" class="hover:text-[#FF0000] transition-colors" aria-label="LinkedIn">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z"/></svg>
                        </a>
                    </div>

                    <div class="inline-flex items-center gap-2 px-3 py-1.5 text-xs font-semibold text-white bg-black border border-white/20 rounded-full shadow-sm">
                        <span>🇫🇷</span>
                        <span class="uppercase">fr</span>
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <nav class="font-body flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-sm text-gray-400">
                    <a href="#" class="underline hover:text-white transition-colors">Politique de confidentialité</a>
                    <a href="#" class="underline hover:text-white transition-colors">Mentions légales</a>
                    <a href="#" class="underline hover:text-white transition-colors">Rejoignez-nous</a>
                    <a href="#" class="underline hover:text-white transition-colors">Politique des cookies</a>
                    <a href="#" class="underline hover:text-white transition-colors">Exercice de vos droits</a>
                </nav>
            </div>
        </div>
    </footer>

    <!-- BOUTON FLOTTANT RETOUR EN HAUT (ROUGE 10%) -->
    <button 
        type="button"
        x-show="showScrollTop"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        @click="scrollToTop()"
        class="fixed bottom-6 right-6 z-40 flex items-center justify-center w-12 h-12 rounded-full bg-[#FF0000] text-white shadow-2xl transition-all duration-300 ease-out hover:bg-[#CC0000] hover:scale-110 focus:outline-none cursor-pointer"
        aria-label="Remonter en haut de page"
    >
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- MODALE RDV ESSAI 30 MIN -->
    <div 
        x-show="modalOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
        @keydown.escape.window="modalOpen = false"
    >
        <div 
            @click.away="modalOpen = false"
            class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 relative border border-[#E5E5E0] shadow-2xl"
        >
            <button 
                type="button" 
                @click="modalOpen = false" 
                class="absolute top-6 right-6 w-9 h-9 rounded-full bg-[#F5F5F5] hover:bg-black hover:text-white text-black flex items-center justify-center transition-colors cursor-pointer"
                aria-label="Fermer"
            >
                ✕
            </button>

            <span class="bg-[#FFE5E5] text-[#FF0000] text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">
                Essai 30 minutes offert
            </span>

            <h3 class="font-heading text-2xl font-bold text-black">
                Réserver votre créneau d'essai
            </h3>
            <p class="font-body text-sm text-[#555555] mt-1">
                Modèle sélectionné : <strong class="text-black" x-text="selectedCar"></strong>
            </p>

            <form class="mt-6 space-y-4" @submit.prevent="alert('Votre demande d\'essai a bien été transmise ! Un conseiller Reinex vous contactera sous 24h.'); modalOpen = false;">
                <div>
                    <label class="block font-heading text-xs font-bold uppercase text-black mb-1">Nom et Prénom</label>
                    <input type="text" required placeholder="ex. Thomas Dupont" class="w-full px-4 py-3 rounded-xl border border-[#E5E5E0] focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none text-sm font-body bg-[#F9F9F9]">
                </div>

                <div>
                    <label class="block font-heading text-xs font-bold uppercase text-black mb-1">Téléphone mobile (WhatsApp)</label>
                    <input type="tel" required placeholder="ex. 06 12 34 56 78" class="w-full px-4 py-3 rounded-xl border border-[#E5E5E0] focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none text-sm font-body bg-[#F9F9F9]">
                </div>

                <div>
                    <label class="block font-heading text-xs font-bold uppercase text-black mb-1">Créneau d'essai préféré</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-[#E5E5E0] focus:border-[#FF0000] focus:ring-1 focus:ring-[#FF0000] outline-none text-sm font-body bg-white">
                        <option>Dès aujourd'hui (selon disponibilité)</option>
                        <option>Demain matin (09h30 - 12h00)</option>
                        <option>Demain après-midi (14h00 - 18h30)</option>
                        <option>Ce samedi en agence</option>
                    </select>
                </div>

                <div class="pt-2">
                    <button type="submit" class="btn-reinex-primary w-full !h-[50px] text-base">
                        Confirmer ma réservation d'essai
                    </button>
                </div>

                <p class="font-body text-xs text-center text-gray-500 mt-2">
                    Confirmation par SMS/WhatsApp · Zéro engagement d'achat
                </p>
            </form>
        </div>
    </div>

</body>
</html>
