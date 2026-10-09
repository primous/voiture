import React from 'react';
import { Phone, Mail, MapPin, Clock, ShieldCheck, ArrowUp } from 'lucide-react';
import { NOM_AGENCE, X } from '../constants';

export default function Footer() {
  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <footer className="bg-[#000000] text-white pt-16 pb-12 border-t border-neutral-800">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Grille principale */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-14">
          
          {/* Colonne 1 : Marque & Présentation */}
          <div>
            <div className="flex items-center gap-3 mb-5">
              <div className="bg-white p-2 rounded-xl">
                <img
                  src="/logo.png"
                  alt="Logo"
                  className="h-8 w-auto object-contain"
                />
              </div>
              <span className="font-montserrat font-extrabold text-base tracking-wider uppercase text-white">
                {NOM_AGENCE}
              </span>
            </div>

            <p className="text-sm text-[#A1A1AA] leading-relaxed mb-6">
              Votre concessionnaire d'occasions certifiées. Tous nos véhicules sont audités sur {X} points, 
              garantis {X} mois et prêts à prendre la route dès aujourd'hui.
            </p>

            <div className="flex items-center gap-2 text-xs font-semibold text-emerald-400">
              <span className="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
              Showroom ouvert du lundi au samedi
            </div>
          </div>

          {/* Colonne 2 : Liens Rapides */}
          <div>
            <h4 className="font-montserrat font-bold text-sm uppercase tracking-wider text-white mb-5">
              Navigation
            </h4>
            <ul className="space-y-3 text-sm text-[#A1A1AA]">
              <li>
                <a href="#hero" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Accueil
                </a>
              </li>
              <li>
                <a href="#stock" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Voitures disponibles
                </a>
              </li>
              <li>
                <a href="#methode" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Notre méthode d'audit
                </a>
              </li>
              <li>
                <a href="#benefices" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Nos garanties & bénéfices
                </a>
              </li>
              <li>
                <a href="#comment-ca-marche" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Comment ça marche
                </a>
              </li>
              <li>
                <a href="#faq" className="hover:text-white hover:text-[#FF0000] transition-colors">
                  Foire aux questions
                </a>
              </li>
            </ul>
          </div>

          {/* Colonne 3 : Contact Direct */}
          <div>
            <h4 className="font-montserrat font-bold text-sm uppercase tracking-wider text-white mb-5">
              Contact direct
            </h4>
            <ul className="space-y-3.5 text-sm text-[#A1A1AA]">
              <li className="flex items-start gap-3">
                <MapPin className="w-4 h-4 text-[#FF0000] flex-shrink-0 mt-0.5" />
                <span>Showroom {NOM_AGENCE} • Parc Automobile Central</span>
              </li>
              <li className="flex items-center gap-3">
                <Phone className="w-4 h-4 text-[#FF0000] flex-shrink-0" />
                <a href="tel:+33100000000" className="hover:text-white transition-colors">
                  +33 (0)1 00 00 00 00
                </a>
              </li>
              <li className="flex items-center gap-3">
                <Mail className="w-4 h-4 text-[#FF0000] flex-shrink-0" />
                <a href={`mailto:contact@agence.fr`} className="hover:text-white transition-colors">
                  contact@{NOM_AGENCE}.fr
                </a>
              </li>
              <li className="flex items-start gap-3">
                <Clock className="w-4 h-4 text-[#FF0000] flex-shrink-0 mt-0.5" />
                <span>Lun - Ven: 08h30 - 19h00 | Sam: 09h00 - 18h30</span>
              </li>
            </ul>
          </div>

          {/* Colonne 4 : Engagements */}
          <div>
            <h4 className="font-montserrat font-bold text-sm uppercase tracking-wider text-white mb-5">
              Label Qualité
            </h4>
            <div className="bg-[#111111] p-5 rounded-2xl border border-neutral-800">
              <div className="flex items-center gap-2 mb-2 text-[#FF0000] font-bold text-sm">
                <ShieldCheck className="w-5 h-5" />
                <span>{X} Points de Contrôle</span>
              </div>
              <p className="text-xs text-[#A1A1AA] leading-relaxed mb-4">
                Chaque vente fait l'objet d'un contrat clair avec certificat de kilométrage garanti et attestation de non-gage.
              </p>
              <div className="inline-block bg-neutral-900 border border-neutral-700 text-white font-montserrat font-bold text-xs px-3 py-1.5 rounded-full">
                Garantie {X} mois active
              </div>
            </div>
          </div>

        </div>

        {/* Ligne inférieure & Copyright */}
        <div className="pt-8 border-t border-neutral-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#71717A]">
          <p>© {new Date().getFullYear()} {NOM_AGENCE}. Tous droits réservés. Vente automobile professionnelle certifiée.</p>
          
          <div className="flex items-center gap-6">
            <a href="#" className="hover:text-white transition-colors">Mentions légales</a>
            <a href="#" className="hover:text-white transition-colors">Politique de confidentialité</a>
            <button
              onClick={scrollToTop}
              className="p-2 rounded-full bg-neutral-800 hover:bg-[#FF0000] text-white transition-colors cursor-pointer"
              aria-label="Retour en haut"
            >
              <ArrowUp className="w-4 h-4" />
            </button>
          </div>
        </div>

      </div>
    </footer>
  );
}
