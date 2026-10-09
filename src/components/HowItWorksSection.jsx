import React from 'react';
import { ArrowRight, CheckCircle2 } from 'lucide-react';
import { X } from '../constants';

export default function HowItWorksSection({ onOpenModal }) {
  const steps = [
    {
      number: '01',
      title: 'Sélectionnez votre voiture',
      description:
        "Explorez notre inventaire disponible en ligne avec fiches techniques détaillées et photos réelles, ou confiez-nous vos critères pour un sourcing sur mesure.",
    },
    {
      number: '02',
      title: 'Réservez votre essai gratuit',
      description:
        "Bloquez un créneau en 30 secondes chrono. Venez tester le véhicule sur route réelle sans engagement et posez toutes vos questions à nos experts.",
    },
    {
      number: '03',
      title: 'Consultez le dossier technique',
      description:
        `Découvrez l'historique complet, les factures et le rapport de contrôle ${X} points. Si vous le souhaitez, activez nos solutions de financement souples.`,
    },
    {
      number: '04',
      title: 'Repartez au volant l’esprit serein',
      description:
        `Votre voiture vous attend propre, révisée, avec son plein et sa carte grise. Votre garantie ${X} mois est activée immédiatement dès la remise des clés.`,
    },
  ];

  return (
    <section id="comment-ca-marche" className="bg-white py-20 lg:py-28 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* En-tête de section */}
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-50 border border-red-200/70 mb-5">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              Processus Transparent
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-black leading-tight tracking-tight mb-6">
            Votre voiture en 4 étapes simples.
          </h2>

          <p className="text-base sm:text-lg text-[#52525B] leading-relaxed">
            Pas de paperasse interminable, pas de pression commerciale. De votre premier clic jusqu'à la remise des clés :
          </p>
        </div>

        {/* 4 étapes numérotées avec gros chiffres rouges 01 02 03 04 */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mb-16">
          {steps.map((step, idx) => (
            <div
              key={idx}
              className="bg-white rounded-[24px] border border-[#E5E5E5] p-8 shadow-sm hover:border-[#FF0000] hover:shadow-xl transition-all duration-300 flex flex-col justify-between group"
            >
              <div>
                {/* Gros chiffre ROUGE */}
                <div className="font-montserrat font-black text-5xl lg:text-6xl text-[#FF0000] tracking-tighter mb-6 group-hover:scale-105 transition-transform duration-300">
                  {step.number}
                </div>

                <h3 className="font-montserrat font-extrabold text-xl text-black mb-4 leading-snug">
                  {step.title}
                </h3>

                <p className="text-[#52525B] text-sm sm:text-base leading-relaxed font-normal">
                  {step.description}
                </p>
              </div>

              <div className="pt-6 mt-6 border-t border-[#E5E5E5] flex items-center gap-2 text-xs font-bold text-black uppercase tracking-wider font-montserrat">
                <CheckCircle2 className="w-4 h-4 text-[#FF0000]" />
                <span>Étape vérifiée</span>
              </div>
            </div>
          ))}
        </div>

        {/* Bouton rouge "Commencer maintenant" */}
        <div className="text-center">
          <button
            type="button"
            onClick={() => onOpenModal('Commencer maintenant')}
            className="inline-flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold text-base sm:text-lg px-8 py-4 hover:bg-[#CC0000] transition-all duration-300 shadow-xl shadow-red-600/25 hover:shadow-red-600/40 hover:-translate-y-0.5 group"
          >
            <span>Commencer maintenant</span>
            <ArrowRight className="w-5 h-5 ml-2.5 transition-transform group-hover:translate-x-1" />
          </button>
          <p className="mt-4 text-xs sm:text-sm text-[#52525B]">
            Sans aucun engagement • Réponse rapide en moins de 15 minutes
          </p>
        </div>

      </div>
    </section>
  );
}
