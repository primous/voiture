import React from 'react';
import { Star, CheckCircle } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function SocialProofSection() {
  const stats = [
    {
      value: `${X}+`,
      label: 'Véhicules vérifiés & livrés',
      subtext: 'Partout en France avec 0 litige',
    },
    {
      value: '99.2%',
      label: 'Clients pleinement satisfaits',
      subtext: 'Avis vérifiés & certifiés indépendants',
    },
    {
      value: `${X}`,
      label: 'Points de contrôle systématiques',
      subtext: 'Audit obligatoire sur chaque auto',
    },
  ];

  const testimonials = [
    {
      name: 'Marc Dupond',
      car: 'Achat Peugeot 3008 GT Line',
      date: 'Il y a 3 semaines',
      rating: 5,
      avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80',
      text: `J'avais une peur bleue d'acheter d'occasion après une mauvaise expérience avec un vendeur particulier il y a deux ans. Chez ${NOM_AGENCE}, l'équipe a été exemplaire : rapport de ${X} points complet sous les yeux, historique limpide et voiture dans un état neuf. Déjà 4 000 km parcourus et que du bonheur !`,
      badge: 'Client vérifié',
    },
    {
      name: 'Sophie Laurent',
      car: 'Achat Mercedes Classe A 200',
      date: 'Il y a 1 mois',
      rating: 5,
      avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80',
      text: `Ce qui m'a convaincue, c'est la transparence totale sur le prix et l'essai routier immédiat sans aucune insistance. La garantie ${X} mois offre une vraie sérénité d'esprit qu'on ne trouve nulle part ailleurs. La carte grise est arrivée chez moi 4 jours après. Je recommande les yeux fermés !`,
      badge: 'Acheteuse vérifiée',
    },
  ];

  return (
    <section id="temoignages" className="bg-[#000000] text-white py-20 lg:py-28 relative overflow-hidden">
      {/* Lueur rouge d'arrière-plan */}
      <div className="absolute -bottom-32 right-1/4 w-96 h-96 bg-red-600/10 rounded-full blur-[140px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {/* En-tête de section */}
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/70 border border-red-800/50 mb-5">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              Preuve Sociale & Confiance
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-white leading-tight tracking-tight mb-6">
            Ils ont franchi le pas. Voici leur retour d'expérience.
          </h2>

          <p className="text-base sm:text-lg text-[#A1A1AA] leading-relaxed">
            La réputation de {NOM_AGENCE} repose sur un seul critère : la tranquillité totale de chaque conducteur au quotidien.
          </p>
        </div>

        {/* 3 CHIFFRES CLÉS EN ROUGE */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
          {stats.map((stat, i) => (
            <div
              key={i}
              className="bg-[#111111] rounded-[24px] p-8 border border-neutral-800 text-center flex flex-col items-center justify-center hover:border-[#FF0000]/50 transition-all"
            >
              <div className="font-montserrat font-black text-5xl lg:text-6xl text-[#FF0000] tracking-tight mb-3">
                {stat.value}
              </div>
              <h3 className="font-montserrat font-bold text-lg text-white mb-1">
                {stat.label}
              </h3>
              <p className="text-xs sm:text-sm text-[#A1A1AA]">
                {stat.subtext}
              </p>
            </div>
          ))}
        </div>

        {/* 2 CARDS TÉMOIGNAGES BLANCHES */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {testimonials.map((test, index) => (
            <div
              key={index}
              className="bg-white rounded-[24px] p-8 sm:p-10 text-black shadow-2xl border border-white/20 flex flex-col justify-between relative group hover:-translate-y-1 transition-transform duration-300"
            >
              <div>
                {/* Note 5 étoiles en ROUGE */}
                <div className="flex items-center justify-between mb-6">
                  <div className="flex items-center gap-1">
                    {[...Array(test.rating)].map((_, r) => (
                      <Star key={r} className="w-5 h-5 fill-[#FF0000] text-[#FF0000]" />
                    ))}
                  </div>
                  <span className="text-xs font-bold text-black bg-neutral-100 px-3 py-1 rounded-full flex items-center gap-1.5">
                    <CheckCircle className="w-3.5 h-3.5 text-[#FF0000]" />
                    {test.badge}
                  </span>
                </div>

                {/* Avis */}
                <p className="text-base sm:text-lg text-[#000000] font-normal leading-relaxed mb-8 italic">
                  "{test.text}"
                </p>
              </div>

              {/* Auteur */}
              <div className="flex items-center gap-4 pt-6 border-t border-[#E5E5E5]">
                <img
                  src={test.avatar}
                  alt={test.name}
                  className="w-14 h-14 rounded-full object-cover border-2 border-[#FF0000]"
                />
                <div>
                  <h4 className="font-montserrat font-bold text-base text-black">
                    {test.name}
                  </h4>
                  <p className="text-xs text-[#52525B] font-medium">
                    {test.car} • <span className="text-neutral-400">{test.date}</span>
                  </p>
                </div>
              </div>
            </div>
          ))}
        </div>

      </div>
    </section>
  );
}
