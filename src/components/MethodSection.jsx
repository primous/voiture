import React, { useState } from 'react';
import { 
  ClipboardCheck, 
  FileCheck2, 
  BadgePercent, 
  Check, 
  ArrowRight, 
  Fuel, 
  Gauge, 
  Calendar, 
  Sparkles,
  ShieldCheck 
} from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function MethodSection({ onOpenModal }) {
  const [activeFilter, setActiveFilter] = useState('Tous');

  const methodSteps = [
    {
      icon: ClipboardCheck,
      tag: 'Étape 01 • Rigueur',
      title: 'Inspection complète',
      description:
        `Diagnostic approfondi sur ${X} points vitaux par nos techniciens certifiés : moteur, boîte de vitesses, freinage, trains roulants, suspension, électronique embarquée et sécurité passive.`,
      highlight: `Rapport d’inspection complet de ${X} pages remis avant signature.`,
    },
    {
      icon: FileCheck2,
      tag: 'Étape 02 • Traçabilité',
      title: 'Historique vérifié',
      description:
        "Contrôle certifié de l'historique complet : carnet d'entretien à jour, traçabilité kilométrique officielle, antécédents d'accidents vérifiés et certificat de non-gage garanti.",
      highlight: 'Zéro vice caché. Zéro sinistre lourd dissimulé.',
    },
    {
      icon: BadgePercent,
      tag: 'Étape 03 • Confiance',
      title: 'Prix transparent',
      description:
        "Le prix affiché est le prix clé en main. Pas de frais de dossier surprises, pas de mauvaise blague de dernière minute. Devis détaillé remis immédiatement sans aucune obligation.",
      highlight: 'Meilleur rapport qualité/prix garanti sur le marché.',
    },
  ];

  // Catalogue de véhicules d'occasion réalistes avec photos Unsplash
  const vehicles = [
    {
      id: 1,
      category: 'Berline',
      name: 'Mercedes-Benz Classe A 200 AMG Line',
      year: '2022',
      mileage: '38 500 km',
      fuel: 'Essence Auto',
      price: '28 900 €',
      warranty: `Garantie ${X} mois`,
      image: 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=800&q=80',
      badge: 'Coup de cœur',
    },
    {
      id: 2,
      category: 'SUV',
      name: 'Peugeot 3008 GT Line 1.5 BlueHDi',
      year: '2021',
      mileage: '49 200 km',
      fuel: 'Diesel Auto',
      price: '22 400 €',
      warranty: `Garantie ${X} mois`,
      image: 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=800&q=80',
      badge: 'Prêt à partir',
    },
    {
      id: 3,
      category: 'Berline',
      name: 'BMW Série 3 320d M Sport',
      year: '2022',
      mileage: '41 000 km',
      fuel: 'Diesel Auto',
      price: '33 500 €',
      warranty: `Garantie ${X} mois`,
      image: 'https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=800&q=80',
      badge: `Audit ${X} pts validé`,
    },
    {
      id: 4,
      category: 'Citadine',
      name: 'Volkswagen Polo R-Line 1.0 TSI',
      year: '2023',
      mileage: '24 800 km',
      fuel: 'Essence BVM',
      price: '18 200 €',
      warranty: `Garantie ${X} mois`,
      image: 'https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&w=800&q=80',
      badge: 'Première main',
    },
  ];

  const filteredVehicles = activeFilter === 'Tous' 
    ? vehicles 
    : vehicles.filter(v => v.category === activeFilter);

  return (
    <section id="methode" className="bg-white py-20 lg:py-28 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* En-tête de section */}
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-50 border border-red-200/80 mb-5">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              Le standard {NOM_AGENCE}
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-black leading-tight tracking-tight mb-6">
            Une sélection rigoureuse, un historique clair.
          </h2>

          <p className="text-base sm:text-lg text-[#52525B] leading-relaxed">
            Nous refusons plus de 70% des voitures examinées pour ne retenir que des véhicules fiables, 
            sains et irréprochables. Notre charte de qualité repose sur 3 piliers inaltérables :
          </p>
        </div>

        {/* Grille 3 cards blanches avec bordure 1px #E5E5E5 et icône rouge en haut */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
          {methodSteps.map((card, idx) => {
            const Icon = card.icon;
            return (
              <div
                key={idx}
                className="bg-white rounded-[24px] border border-[#E5E5E5] p-8 lg:p-9 shadow-sm hover:border-[#FF0000] hover:shadow-xl hover:shadow-black/5 transition-all duration-300 flex flex-col justify-between group"
              >
                <div>
                  {/* Icône rouge en haut */}
                  <div className="w-16 h-16 rounded-2xl bg-red-50 border border-red-100 flex items-center justify-center text-[#FF0000] mb-8 group-hover:scale-110 transition-transform">
                    <Icon className="w-8 h-8" />
                  </div>

                  <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat block mb-2">
                    {card.tag}
                  </span>

                  <h3 className="font-montserrat font-extrabold text-2xl text-black mb-4">
                    {card.title}
                  </h3>

                  <p className="text-[#52525B] text-base leading-relaxed mb-6 font-normal">
                    {card.description}
                  </p>
                </div>

                <div className="pt-6 border-t border-[#E5E5E5] flex items-center gap-2.5">
                  <Check className="w-5 h-5 text-[#FF0000] flex-shrink-0" />
                  <span className="text-xs sm:text-sm font-semibold text-black">
                    {card.highlight}
                  </span>
                </div>
              </div>
            );
          })}
        </div>

        {/* Showcase Voitures disponibles */}
        <div id="stock" className="pt-8">
          <div className="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
            <div>
              <div className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-[#FF0000] font-montserrat mb-2">
                <Sparkles className="w-3.5 h-3.5" />
                Notre parc en temps réel
              </div>
              <h3 className="font-montserrat font-extrabold text-2xl sm:text-3xl text-black">
                Nos occasions vérifiées du moment
              </h3>
            </div>

            {/* Filtres de catégorie */}
            <div className="flex items-center gap-2 flex-wrap">
              {['Tous', 'Berline', 'SUV', 'Citadine'].map((cat) => (
                <button
                  key={cat}
                  onClick={() => setActiveFilter(cat)}
                  className={`px-5 py-2 rounded-full text-sm font-bold transition-all ${
                    activeFilter === cat
                      ? 'bg-black text-white shadow-md'
                      : 'bg-neutral-100 text-[#52525B] hover:bg-neutral-200'
                  }`}
                >
                  {cat}
                </button>
              ))}
            </div>
          </div>

          {/* Grille des véhicules */}
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {filteredVehicles.map((car) => (
              <div
                key={car.id}
                className="bg-white rounded-[24px] border border-[#E5E5E5] overflow-hidden shadow-sm hover:border-[#FF0000] hover:shadow-xl transition-all duration-300 flex flex-col justify-between group"
              >
                <div>
                  {/* Image voiture avec radius 20px feeling & badges */}
                  <div className="relative h-48 overflow-hidden bg-neutral-100">
                    <img
                      src={car.image}
                      alt={car.name}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                      loading="lazy"
                    />
                    <div className="absolute top-3 left-3 bg-[#FF0000] text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider font-montserrat shadow-sm">
                      {car.badge}
                    </div>
                    <div className="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-xs font-medium px-2.5 py-1 rounded-full">
                      {car.category}
                    </div>
                  </div>

                  {/* Fiche technique */}
                  <div className="p-5">
                    <h4 className="font-montserrat font-bold text-base text-black mb-3 line-clamp-1">
                      {car.name}
                    </h4>

                    <div className="grid grid-cols-2 gap-2 text-xs text-[#52525B] mb-4">
                      <div className="flex items-center gap-1.5">
                        <Calendar className="w-3.5 h-3.5 text-black" />
                        <span>{car.year}</span>
                      </div>
                      <div className="flex items-center gap-1.5">
                        <Gauge className="w-3.5 h-3.5 text-black" />
                        <span>{car.mileage}</span>
                      </div>
                      <div className="flex items-center gap-1.5 col-span-2">
                        <Fuel className="w-3.5 h-3.5 text-black" />
                        <span>{car.fuel}</span>
                      </div>
                    </div>

                    <div className="pt-3 border-t border-[#E5E5E5] flex items-center justify-between">
                      <div>
                        <span className="text-xs text-[#52525B] block">Prix certifié</span>
                        <span className="font-montserrat font-extrabold text-xl text-black">
                          {car.price}
                        </span>
                      </div>
                      <span className="text-[11px] font-semibold text-[#FF0000] bg-red-50 px-2 py-1 rounded-md border border-red-100">
                        {car.warranty}
                      </span>
                    </div>
                  </div>
                </div>

                <div className="p-5 pt-0">
                  <button
                    type="button"
                    onClick={() => onOpenModal(`Essai pour : ${car.name}`)}
                    className="w-full rounded-full bg-[#000000] text-white font-bold py-2.5 text-xs hover:bg-[#FF0000] transition-colors flex items-center justify-center gap-2 group-hover:bg-[#FF0000]"
                  >
                    <span>Réserver un essai</span>
                    <ArrowRight className="w-3.5 h-3.5" />
                  </button>
                </div>
              </div>
            ))}
          </div>

          {/* Bannière recherche sur-mesure */}
          <div className="mt-10 p-6 rounded-[24px] bg-neutral-50 border border-[#E5E5E5] flex flex-col sm:flex-row items-center justify-between gap-4">
            <div className="flex items-center gap-3">
              <div className="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center flex-shrink-0">
                <ShieldCheck className="w-5 h-5 text-[#FF0000]" />
              </div>
              <p className="text-sm text-black font-medium">
                Vous recherchez une marque ou un modèle spécifique ? 
                <strong className="text-black"> {NOM_AGENCE}</strong> trouve votre occasion sur mesure avec les mêmes garanties.
              </p>
            </div>
            <button
              type="button"
              onClick={() => onOpenModal('Recherche personnalisée')}
              className="flex-shrink-0 rounded-full bg-black text-white font-bold text-xs px-6 py-3 hover:bg-[#FF0000] transition-colors"
            >
              Faire une recherche sur mesure
            </button>
          </div>

        </div>

      </div>
    </section>
  );
}
