import React from 'react';
import { AlertTriangle, Wrench, UserX, ShieldAlert, XCircle } from 'lucide-react';
import { NOM_AGENCE } from '../constants';

export default function ProblemSection() {
  const problems = [
    {
      icon: AlertTriangle,
      title: 'Kilométrage trafiqué ?',
      description:
        "Des compteurs baissés de plusieurs dizaines de milliers de kilomètres pour gonfler artificiellement le prix de vente et masquer l'usure critique des pièces mécaniques.",
      impact: 'Jusqu’à 25% de surcoût payé pour une voiture en fin de cycle.',
    },
    {
      icon: Wrench,
      title: 'Panne dès le premier mois ?',
      description:
        "Boîte de vitesses défaillante, courroie fatiguée, injecteurs encrassés ou joint de culasse fragilisé dissimulés par un simple nettoyage moteur de surface.",
      impact: 'Des réparations d’urgence imprévues pouvant dépasser 2 000 €.',
    },
    {
      icon: UserX,
      title: 'Vendeur introuvable ?',
      description:
        "Téléphone éteint, profil supprimé ou fausse identité dès que le voyant moteur s’allume sur l'autoroute. Aucun recours possible ni aucune garantie légale appliquée.",
      impact: '0 recours immédiat et des mois de litiges juridiques à vos frais.',
    },
  ];

  return (
    <section id="probleme" className="bg-[#000000] text-white py-20 lg:py-28 relative overflow-hidden">
      {/* Halo rouge d'ambiance sombre */}
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[140px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {/* En-tête de section */}
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-800/50 mb-5">
            <ShieldAlert className="w-4 h-4 text-[#FF0000]" />
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              La réalité du marché de l'occasion
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-white leading-tight tracking-tight mb-6">
            Acheter une occasion ne devrait pas être un pari.
          </h2>

          <p className="text-base sm:text-lg text-[#A1A1AA] leading-relaxed">
            Entre particuliers ou sur les plateformes de petites annonces, la peur de se faire avoir est partout. 
            Voici les 3 pièges majeurs qui gâchent l'expérience de milliers d'automobilistes chaque année :
          </p>
        </div>

        {/* Grille des 3 problèmes avec icônes rouges */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
          {problems.map((item, index) => {
            const Icon = item.icon;
            return (
              <div
                key={index}
                className="group bg-[#111111] hover:bg-[#18181B] rounded-[24px] p-8 border border-neutral-800 hover:border-[#FF0000]/60 transition-all duration-300 flex flex-col justify-between"
              >
                <div>
                  {/* Icône ROUGE vive */}
                  <div className="w-14 h-14 rounded-2xl bg-red-600/15 border border-red-600/30 flex items-center justify-center text-[#FF0000] mb-6 group-hover:scale-110 transition-transform">
                    <Icon className="w-7 h-7" />
                  </div>

                  <h3 className="font-montserrat font-extrabold text-xl sm:text-2xl text-white mb-4 flex items-center justify-between">
                    <span>{item.title}</span>
                    <XCircle className="w-5 h-5 text-[#FF0000]/70 flex-shrink-0" />
                  </h3>

                  <p className="text-[#A1A1AA] text-sm sm:text-base leading-relaxed mb-6 font-normal">
                    {item.description}
                  </p>
                </div>

                <div className="pt-4 border-t border-neutral-800/80">
                  <p className="text-xs text-red-400 font-semibold flex items-center gap-1.5">
                    <span className="w-1.5 h-1.5 rounded-full bg-[#FF0000]"></span>
                    {item.impact}
                  </p>
                </div>
              </div>
            );
          })}
        </div>

        {/* Encadré rassurant de transition vers la méthode */}
        <div className="mt-14 p-6 sm:p-8 rounded-[24px] bg-[#141414] border border-red-600/30 text-center max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-6">
          <div className="text-left">
            <p className="text-xs font-bold uppercase tracking-widest text-[#FF0000] mb-1 font-montserrat">
              La promesse {NOM_AGENCE}
            </p>
            <p className="text-white text-base sm:text-lg font-semibold">
              Nous avons supprimé 100% de ces risques grâce à notre protocole d'audit et notre engagement contractuel.
            </p>
          </div>
          <a
            href="#methode"
            className="flex-shrink-0 rounded-full bg-[#FF0000] text-white font-bold px-7 py-3.5 text-sm hover:bg-[#CC0000] transition-colors shadow-md"
          >
            Découvrir notre méthode
          </a>
        </div>

      </div>
    </section>
  );
}
