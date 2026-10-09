import React from 'react';
import { Check, ShieldCheck, Wrench, FileText, Compass, Repeat } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function BenefitsSection() {
  const benefits = [
    {
      icon: ShieldCheck,
      title: `Garantie mécanique jusqu’à ${X} mois incluse`,
      description:
        "Couverture complète pièces et main d’œuvre valable sur tout le territoire national, sans vétusté abusive ni franchise cachée.",
    },
    {
      icon: Wrench,
      title: 'Véhicule 100% révisé & zéro frais immédiat',
      description:
        `Vidange, filtres, pneumatiques et système de freinage validés : vous roulez au moins ${X} 000 km sans devoir débourser le moindre centime d'entretien.`,
    },
    {
      icon: FileText,
      title: 'Formalités administratives totalement prises en charge',
      description:
        "Changement de carte grise, démarches préfectorales, certificat de situation administrative : nous gérons tout de A à Z avant la remise des clés.",
    },
    {
      icon: Compass,
      title: 'Essai routier sans aucun engagement',
      description:
        "Prenez les commandes sur route réelle pendant 30 minutes. Testez l'accélération, le freinage, le confort à bord en conditions réelles.",
    },
    {
      icon: Repeat,
      title: 'Reprise immédiate de votre ancienne voiture',
      description:
        "Estimation claire et équitable de votre véhicule actuel, déductible immédiatement du prix de votre nouvelle voiture sans contrainte de contrôle technique.",
    },
  ];

  return (
    <section id="benefices" className="bg-[#F9F9F9] py-20 lg:py-28 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* En-tête de section */}
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-[#E5E5E5] mb-5 shadow-sm">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              Avantages Exclusifs
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-black leading-tight tracking-tight mb-6">
            Roulez l'esprit tranquille dès le premier kilomètre.
          </h2>

          <p className="text-base sm:text-lg text-[#52525B] leading-relaxed">
            Pourquoi nos clients choisissent {NOM_AGENCE} plutôt qu'une transaction hasardeuse ? 
            Voici les garanties tangibles que nous engageons pour chaque acquéreur :
          </p>
        </div>

        {/* Grille des 5 bénéfices avec check rouge */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
          {benefits.map((item, index) => {
            const Icon = item.icon;
            return (
              <div
                key={index}
                className={`bg-white rounded-[24px] border border-[#E5E5E5] p-8 shadow-sm hover:border-[#FF0000] hover:shadow-lg transition-all duration-300 flex flex-col justify-between ${
                  index === 4 ? 'md:col-span-2 lg:col-span-1' : ''
                }`}
              >
                <div>
                  {/* Check ROUGE & Icône thématique */}
                  <div className="flex items-center justify-between mb-6">
                    <div className="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center text-[#FF0000]">
                      <Icon className="w-6 h-6" />
                    </div>
                    <div className="w-8 h-8 rounded-full bg-red-100/70 flex items-center justify-center text-[#FF0000]">
                      <Check className="w-5 h-5 stroke-[2.5]" />
                    </div>
                  </div>

                  <h3 className="font-montserrat font-extrabold text-xl text-black mb-3">
                    {item.title}
                  </h3>

                  <p className="text-[#52525B] text-sm sm:text-base leading-relaxed font-normal">
                    {item.description}
                  </p>
                </div>
              </div>
            );
          })}
        </div>

        {/* Accroche finale en BOLD exigée */}
        <div className="bg-white rounded-[24px] border-2 border-black p-8 sm:p-10 text-center max-w-4xl mx-auto shadow-md">
          <p className="font-montserrat font-extrabold text-xl sm:text-2xl lg:text-3xl text-black leading-snug">
            "Vous repartez avec les clés, la garantie et l'assurance d'avoir fait le bon choix. Pas de compromis."
          </p>
          <div className="mt-4 flex items-center justify-center gap-2 text-sm font-semibold text-[#52525B]">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span>Engagement contractuel et formalisé par {NOM_AGENCE}</span>
          </div>
        </div>

      </div>
    </section>
  );
}
