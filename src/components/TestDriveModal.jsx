import React, { useState } from 'react';
import { X as CloseIcon, CheckCircle2, Calendar, Phone, Mail, User, Car } from 'lucide-react';
import { NOM_AGENCE } from '../constants';

export default function TestDriveModal({ isOpen, onClose, initialInterest }) {
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    email: '',
    vehicle: initialInterest || 'Véhicule en stock',
    preferredDate: '',
    message: '',
  });

  const [submitted, setSubmitted] = useState(false);

  if (!isOpen) return null;

  const handleSubmit = (e) => {
    e.preventDefault();
    setSubmitted(true);
  };

  const handleReset = () => {
    setSubmitted(false);
    onClose();
  };

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/75 backdrop-blur-sm animate-fadeIn">
      <div 
        className="bg-white rounded-[28px] max-w-lg w-full p-6 sm:p-8 relative shadow-2xl border border-[#E5E5E5] max-h-[90vh] overflow-y-auto"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Bouton fermeture */}
        <button
          onClick={onClose}
          className="absolute top-5 right-5 p-2 rounded-full text-black hover:bg-neutral-100 transition-colors"
          aria-label="Fermer"
        >
          <CloseIcon className="w-5 h-5" />
        </button>

        {!submitted ? (
          <div>
            <div className="mb-6">
              <span className="text-xs font-bold uppercase tracking-wider text-[#FF0000] font-montserrat">
                Essai Gratuit & Sans Engagement
              </span>
              <h3 className="font-montserrat font-extrabold text-2xl text-black mt-1">
                Réservez votre créneau
              </h3>
              <p className="text-sm text-[#52525B] mt-1">
                Venez tester le véhicule sur route réelle avec un conseiller {NOM_AGENCE}.
              </p>
            </div>

            <form onSubmit={handleSubmit} className="space-y-4">
              <div>
                <label className="block text-xs font-bold text-black uppercase tracking-wider mb-1.5 font-montserrat">
                  Véhicule concerné
                </label>
                <div className="relative">
                  <Car className="w-4 h-4 text-neutral-400 absolute left-3.5 top-3.5" />
                  <input
                    type="text"
                    required
                    value={formData.vehicle}
                    onChange={(e) => setFormData({ ...formData, vehicle: e.target.value })}
                    className="w-full pl-10 pr-4 py-2.5 rounded-xl border border-[#E5E5E5] focus:outline-none focus:border-[#FF0000] text-sm text-black"
                    placeholder="Ex: Mercedes Classe A, Peugeot 3008..."
                  />
                </div>
              </div>

              <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label className="block text-xs font-bold text-black uppercase tracking-wider mb-1.5 font-montserrat">
                    Votre Nom complet
                  </label>
                  <div className="relative">
                    <User className="w-4 h-4 text-neutral-400 absolute left-3.5 top-3.5" />
                    <input
                      type="text"
                      required
                      value={formData.name}
                      onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                      className="w-full pl-10 pr-4 py-2.5 rounded-xl border border-[#E5E5E5] focus:outline-none focus:border-[#FF0000] text-sm text-black"
                      placeholder="Jean Dupont"
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold text-black uppercase tracking-wider mb-1.5 font-montserrat">
                    Téléphone
                  </label>
                  <div className="relative">
                    <Phone className="w-4 h-4 text-neutral-400 absolute left-3.5 top-3.5" />
                    <input
                      type="tel"
                      required
                      value={formData.phone}
                      onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                      className="w-full pl-10 pr-4 py-2.5 rounded-xl border border-[#E5E5E5] focus:outline-none focus:border-[#FF0000] text-sm text-black"
                      placeholder="06 12 34 56 78"
                    />
                  </div>
                </div>
              </div>

              <div>
                <label className="block text-xs font-bold text-black uppercase tracking-wider mb-1.5 font-montserrat">
                  Email
                </label>
                <div className="relative">
                  <Mail className="w-4 h-4 text-neutral-400 absolute left-3.5 top-3.5" />
                  <input
                    type="email"
                    required
                    value={formData.email}
                    onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                    className="w-full pl-10 pr-4 py-2.5 rounded-xl border border-[#E5E5E5] focus:outline-none focus:border-[#FF0000] text-sm text-black"
                    placeholder="jean.dupont@email.com"
                  />
                </div>
              </div>

              <div>
                <label className="block text-xs font-bold text-black uppercase tracking-wider mb-1.5 font-montserrat">
                  Date souhaitée
                </label>
                <div className="relative">
                  <Calendar className="w-4 h-4 text-neutral-400 absolute left-3.5 top-3.5" />
                  <input
                    type="date"
                    value={formData.preferredDate}
                    onChange={(e) => setFormData({ ...formData, preferredDate: e.target.value })}
                    className="w-full pl-10 pr-4 py-2.5 rounded-xl border border-[#E5E5E5] focus:outline-none focus:border-[#FF0000] text-sm text-black"
                  />
                </div>
              </div>

              <div className="pt-2">
                <button
                  type="submit"
                  className="w-full rounded-full bg-[#FF0000] text-white font-bold py-3.5 text-base hover:bg-[#CC0000] transition-colors shadow-lg shadow-red-600/30 font-montserrat cursor-pointer"
                >
                  Confirmer ma demande d'essai
                </button>
              </div>

              <p className="text-center text-xs text-[#52525B]">
                ✓ Aucun paiement requis • Réponse sous 15 minutes garantie
              </p>
            </form>
          </div>
        ) : (
          <div className="text-center py-6">
            <div className="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4">
              <CheckCircle2 className="w-10 h-10" />
            </div>
            <h3 className="font-montserrat font-extrabold text-2xl text-black mb-2">
              Demande enregistrée avec succès !
            </h3>
            <p className="text-sm text-[#52525B] max-w-sm mx-auto mb-6">
              Merci <strong>{formData.name}</strong>. Un expert {NOM_AGENCE} va vous contacter au <strong>{formData.phone}</strong> pour confirmer votre horaire.
            </p>
            <button
              onClick={handleReset}
              className="rounded-full bg-black text-white font-bold px-8 py-3 text-sm hover:bg-neutral-800 cursor-pointer"
            >
              Fermer la fenêtre
            </button>
          </div>
        )}
      </div>
    </div>
  );
}
