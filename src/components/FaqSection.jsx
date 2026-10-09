import React, { useState } from 'react';
import { Plus } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function FaqSection() {
  const [openIndex, setOpenIndex] = useState(0);

  const faqs = [
    {
      question: `D'où proviennent les véhicules en vente chez ${NOM_AGENCE} ?`,
      answer:
        "Tous nos véhicules proviennent de retours de leasing longue durée de premières mains, de concessions officielles partenaires et de reprises certifiées. Nous refusons catégoriquement les véhicules d'enchères douteuses, les voitures accidentées réhabilitées et les modèles sans carnet d'entretien vérifié.",
    },
    {
      question: `Que couvre exactement la garantie de ${X} mois incluse ?`,
      answer:
        "Notre garantie couvre les organes mécaniques majeurs : moteur, turbocompresseur, boîte de vitesses (manuelle ou automatique), pont, système de freinage, direction assistée, alternateur, démarreur et calculateurs électroniques vitaux. Les réparations sont prises en charge pièces et main-d'œuvre dans n'importe quel garage agréé en France.",
    },
    {
      question: "Puis-je faire vérifier la voiture par mon propre mécanicien ?",
      answer:
        "Absolument, et nous vous y encourageons ! Lors de votre essai gratuit, vous pouvez vous rendre dans le centre de diagnostic ou le garage de votre choix à proximité. Nous mettons également le véhicule sur notre pont élévateur pour vous montrer les dessous de caisse si vous le désirez.",
    },
    {
      question: "Comment se déroule la reprise de mon ancien véhicule ?",
      answer:
        "Nous réalisons une estimation instantanée de votre voiture actuelle basée sur la cote du marché en temps réel et son état effectif. Le montant convenu est déduit directement du prix d'achat de votre nouvelle voiture. Vous n'avez pas besoin de passer de contrôle technique préalable.",
    },
    {
      question: "Quels sont les délais pour recevoir la voiture après accord ?",
      answer:
        "Si le véhicule est déjà en showroom, il peut être mis à votre disposition sous 24 à 48 heures ouvrées, le temps d'effectuer la préparation esthétique finale et l'édition de votre certificat provisoire d'immatriculation.",
    },
    {
      question: "Proposez-vous des facilités de paiement ou un crédit auto ?",
      answer:
        "Oui. En partenariat avec nos établissements financiers agréés, nous proposons des solutions de crédit classique ou de location avec option d'achat (LOA/LLD) personnalisées, avec ou sans apport, étalées sur 12 à 72 mois selon votre budget.",
    },
  ];

  const toggleAccordion = (index) => {
    setOpenIndex(openIndex === index ? -1 : index);
  };

  return (
    <section id="faq" className="bg-white py-20 lg:py-28 relative">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* En-tête de section */}
        <div className="text-center mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-50 border border-red-200/80 mb-5">
            <span className="w-2 h-2 rounded-full bg-[#FF0000]"></span>
            <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
              Foire Aux Questions
            </span>
          </div>

          <h2 className="font-montserrat font-extrabold text-3xl sm:text-4xl lg:text-[44px] text-black leading-tight tracking-tight mb-6">
            Tout ce que vous devez savoir avant d'acheter.
          </h2>

          <p className="text-base sm:text-lg text-[#52525B] leading-relaxed">
            Une question sans réponse ? Nos conseillers {NOM_AGENCE} sont disponibles 7j/7 pour vous renseigner.
          </p>
        </div>

        {/* Accordéon interactif avec icône + rouge qui pivote */}
        <div className="space-y-4">
          {faqs.map((faq, index) => {
            const isOpen = openIndex === index;
            return (
              <div
                key={index}
                className="bg-white rounded-[24px] border border-[#E5E5E5] overflow-hidden transition-all duration-300 hover:border-[#FF0000]/60 shadow-sm"
              >
                <button
                  type="button"
                  onClick={() => toggleAccordion(index)}
                  className="w-full py-6 px-6 sm:px-8 flex items-center justify-between text-left focus:outline-none"
                  aria-expanded={isOpen}
                >
                  <span className="font-montserrat font-bold text-lg sm:text-xl text-black pr-4 leading-snug">
                    {faq.question}
                  </span>
                  
                  {/* Icône + rouge qui tourne */}
                  <div
                    className={`w-9 h-9 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0 text-[#FF0000] transition-transform duration-300 ${
                      isOpen ? 'rotate-45 bg-red-100' : 'rotate-0'
                    }`}
                  >
                    <Plus className="w-5 h-5 stroke-[2.5]" />
                  </div>
                </button>

                {isOpen && (
                  <div className="px-6 sm:px-8 pb-6 pt-1 text-[#52525B] text-base leading-relaxed border-t border-neutral-100 animate-fadeIn">
                    <p>{faq.answer}</p>
                  </div>
                )}
              </div>
            );
          })}
        </div>

        {/* Encadré d'aide supplémentaire */}
        <div className="mt-12 text-center p-6 rounded-[24px] bg-[#F9F9F9] border border-[#E5E5E5]">
          <p className="text-sm text-black font-medium mb-3">
            Vous avez une question spécifique sur un véhicule précis en stock ?
          </p>
          <a
            href="https://wa.me/?text=Bonjour%20je%20souhaite%20des%20renseignements%20sur%20un%20véhicule"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center text-sm font-bold text-[#FF0000] hover:underline gap-1.5"
          >
            Discuter directement avec un expert {NOM_AGENCE} sur WhatsApp →
          </a>
        </div>

      </div>
    </section>
  );
}
