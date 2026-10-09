import React from 'react';
import { ArrowRight, ShieldCheck, CheckCircle2, Award } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function HeroSection({ onOpenModal }) {
  return (
    <section id="hero" className="relative bg-white pt-28 pb-16 lg:pt-36 lg:pb-24 overflow-hidden">
      {/* Background subtle mesh glow */}
      <div className="absolute top-0 right-0 -z-10 w-96 h-96 bg-red-500/5 rounded-full blur-3xl pointer-events-none" />

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
          
          {/* Colonne Gauche : Contenu AIDA - Attention */}
          <div className="lg:col-span-7 flex flex-col items-start text-left">
            
            {/* Badge Wayi.bj style */}
            <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-50 border border-red-200/60 mb-6">
              <span className="w-2 h-2 rounded-full bg-[#FF0000] animate-pulse"></span>
              <span className="text-xs sm:text-sm font-semibold tracking-wide uppercase text-[#FF0000] font-montserrat">
                {NOM_AGENCE} • OCCASIONS CERTIFIÉES & AUDITÉES
              </span>
            </div>

            {/* Titre Principal H1 (52-64px, Montserrat ExtraBold) */}
            <h1 className="font-montserrat font-extrabold text-4xl sm:text-5xl lg:text-[56px] xl:text-[62px] text-black leading-[1.08] tracking-tight mb-6">
              Votre prochaine voiture est ici,{' '}
              <span className="text-black">vérifiée, garantie,</span>{' '}
              <span className="text-[#FF0000] underline decoration-[#FF0000]/30 underline-offset-8">
                prête à rouler.
              </span>
            </h1>

            {/* Sous-titre rassurant */}
            <p className="text-base sm:text-lg lg:text-xl text-[#52525B] leading-relaxed mb-8 max-w-2xl font-normal">
              Fini les mauvaises surprises. Chez <strong className="text-black font-semibold">{NOM_AGENCE}</strong>, 
              chaque véhicule passe un contrôle minutieux sur <strong className="text-black font-semibold">{X} points essentiels</strong>, 
              bénéficie de <strong className="text-black font-semibold">{X} mois de garantie</strong> et est préparé avec soin. 
              Vous achetez en totale confiance et repartez l'esprit libre.
            </p>

            {/* Groupe Boutons CTA */}
            <div className="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full sm:w-auto mb-10">
              <a
                href="#stock"
                className="inline-flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold text-base sm:text-lg px-8 py-4 hover:bg-[#CC0000] transition-all duration-300 shadow-lg shadow-red-600/25 hover:shadow-red-600/40 hover:-translate-y-0.5 text-center group"
              >
                <span>Voir les voitures disponibles</span>
                <ArrowRight className="w-5 h-5 ml-2.5 transition-transform group-hover:translate-x-1" />
              </a>

              <button
                type="button"
                onClick={() => onOpenModal('Essai gratuit')}
                className="inline-flex items-center justify-center rounded-full bg-[#000000] text-white font-bold text-base px-7 py-4 hover:bg-neutral-800 transition-all duration-300 text-center hover:-translate-y-0.5 shadow-md"
              >
                Réserver un essai gratuit
              </button>
            </div>

            {/* Micro-preuves de confiance */}
            <div className="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-6 pt-6 border-t border-[#E5E5E5] w-full">
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-5 h-5 text-[#FF0000] flex-shrink-0" />
                <span className="text-xs sm:text-sm font-semibold text-black">
                  Inspection sur {X} points
                </span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-5 h-5 text-[#FF0000] flex-shrink-0" />
                <span className="text-xs sm:text-sm font-semibold text-black">
                  Garantie {X} mois incluse
                </span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-5 h-5 text-[#FF0000] flex-shrink-0" />
                <span className="text-xs sm:text-sm font-semibold text-black">
                  Zéro frais à prévoir
                </span>
              </div>
            </div>

          </div>

          {/* Colonne Droite : Grande photo de voiture premium en situation réelle */}
          <div className="lg:col-span-5 relative">
            <div className="relative mx-auto max-w-lg lg:max-w-none">
              
              {/* Image Container avec radius 20px */}
              <div className="relative overflow-hidden rounded-[20px] shadow-2xl border border-neutral-200 aspect-[4/3] sm:aspect-[16/11]">
                <img
                  src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80"
                  alt={`Voiture d'occasion premium vérifiée chez ${NOM_AGENCE}`}
                  className="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700"
                  loading="eager"
                />
                
                {/* Gradient overlay délicat pour faire ressortir les badges */}
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none" />

                {/* Badge supérieur */}
                <div className="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-white/60 shadow-md flex items-center gap-2">
                  <span className="w-2.5 h-2.5 rounded-full bg-[#FF0000]"></span>
                  <span className="text-xs font-bold text-black uppercase tracking-wider font-montserrat">
                    En arrivage immédiat
                  </span>
                </div>

                {/* Info bas d'image */}
                <div className="absolute bottom-4 left-4 right-4 text-white flex items-center justify-between">
                  <div>
                    <p className="text-xs font-medium text-white/80">Exemple en parc</p>
                    <p className="text-base sm:text-lg font-montserrat font-bold">Berline Premium 2022</p>
                  </div>
                  <span className="bg-[#FF0000] text-white font-montserrat font-bold text-xs px-3 py-1.5 rounded-full">
                    Garantie {X} mois
                  </span>
                </div>
              </div>

              {/* Badge flottant en bas à gauche style wayi.bj */}
              <div className="absolute -bottom-6 -left-4 sm:-bottom-8 sm:-left-6 bg-white p-4 sm:p-5 rounded-[20px] border border-[#E5E5E5] shadow-xl flex items-center gap-3.5 z-10 max-w-[280px]">
                <div className="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center flex-shrink-0 text-[#FF0000]">
                  <ShieldCheck className="w-7 h-7" />
                </div>
                <div>
                  <p className="text-xs text-[#52525B] font-medium leading-none mb-1">Audit technique</p>
                  <p className="text-sm font-bold text-black font-montserrat leading-tight">
                    100% des organes de sécurité vérifiés
                  </p>
                </div>
              </div>

              {/* Badge flottant chiffre en haut à droite */}
              <div className="hidden sm:flex absolute -top-4 -right-4 bg-black text-white p-3.5 rounded-[18px] border border-neutral-700 shadow-xl items-center gap-3 z-10">
                <Award className="w-5 h-5 text-[#FF0000]" />
                <span className="text-xs font-semibold">Label Qualité {NOM_AGENCE}</span>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
