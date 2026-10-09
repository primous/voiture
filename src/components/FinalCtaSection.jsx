import React from 'react';
import { ArrowRight, MessageCircle, Clock, Check } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function FinalCtaSection({ onOpenModal }) {
  return (
    <section id="contact" className="bg-[#000000] text-white py-20 lg:py-28 relative overflow-hidden">
      {/* Halo rouge lumineux d'ambiance */}
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[400px] bg-red-600/20 rounded-full blur-[130px] pointer-events-none" />

      <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        {/* Badge d'urgence / conversion */}
        <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/80 border border-red-800/80 mb-6">
          <Clock className="w-4 h-4 text-[#FF0000]" />
          <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
            Disponibilité Limitée du Parc
          </span>
        </div>

        {/* Titre Principal */}
        <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight tracking-tight mb-6">
          Les meilleures occasions partent vite.
        </h2>

        {/* Sous-titre */}
        <p className="text-base sm:text-lg lg:text-xl text-[#A1A1AA] max-w-2xl mx-auto leading-relaxed mb-10">
          En moyenne, nos véhicules labellisés restent moins de {X} jours en stock. 
          Ne laissez pas passer le modèle idéal : réservez un créneau d'essai ou contactez notre équipe sans tarder.
        </p>

        {/* 2 BOUTONS : "Réserver un essai gratuit" (blanc sur rouge) et "WhatsApp" (noir) */}
        <div className="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 mb-8">
          
          {/* Bouton 1 : Primaire Blanc sur Rouge */}
          <button
            type="button"
            onClick={() => onOpenModal('Réserver un essai gratuit')}
            className="w-full sm:w-auto inline-flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold text-base sm:text-lg px-8 py-4 hover:bg-[#CC0000] transition-all duration-300 shadow-xl shadow-red-600/30 hover:shadow-red-600/50 hover:-translate-y-0.5 group cursor-pointer"
          >
            <span>Réserver un essai gratuit</span>
            <ArrowRight className="w-5 h-5 ml-2.5 transition-transform group-hover:translate-x-1" />
          </button>

          {/* Bouton 2 : Secondaire Noir avec icône WhatsApp */}
          <a
            href="https://wa.me/?text=Bonjour%20je%20souhaite%20réserver%20un%20essai%20pour%20une%20voiture"
            target="_blank"
            rel="noopener noreferrer"
            className="w-full sm:w-auto inline-flex items-center justify-center rounded-full bg-[#18181B] text-white border border-neutral-700 hover:border-white font-bold text-base sm:text-lg px-8 py-4 hover:bg-neutral-900 transition-all duration-300 hover:-translate-y-0.5 group"
          >
            <MessageCircle className="w-5 h-5 mr-2.5 text-emerald-400 group-hover:scale-110 transition-transform" />
            <span>WhatsApp</span>
          </a>

        </div>

        {/* Micro-texte de réassurance exigé */}
        <div className="flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-xs sm:text-sm text-[#A1A1AA] font-medium pt-4">
          <span className="flex items-center gap-1.5">
            <Check className="w-4 h-4 text-[#FF0000]" />
            Réponse en moins de 15 min
          </span>
          <span className="flex items-center gap-1.5">
            <Check className="w-4 h-4 text-[#FF0000]" />
            Aucun paiement exigé pour l'essai
          </span>
          <span className="flex items-center gap-1.5">
            <Check className="w-4 h-4 text-[#FF0000]" />
            Disponibilité 7j/7
          </span>
        </div>

      </div>
    </section>
  );
}
