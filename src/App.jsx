import React, { useState } from 'react';
import Navbar from './components/Navbar';
import HeroSection from './components/HeroSection';
import ProblemSection from './components/ProblemSection';
import MethodSection from './components/MethodSection';
import BenefitsSection from './components/BenefitsSection';
import HowItWorksSection from './components/HowItWorksSection';
import SocialProofSection from './components/SocialProofSection';
import FaqSection from './components/FaqSection';
import FinalCtaSection from './components/FinalCtaSection';
import Footer from './components/Footer';
import TestDriveModal from './components/TestDriveModal';

export default function App() {
  const [modalOpen, setModalOpen] = useState(false);
  const [modalVehicle, setModalVehicle] = useState('Véhicule en stock');

  const handleOpenModal = (vehicleTitle = 'Véhicule en stock') => {
    setModalVehicle(vehicleTitle);
    setModalOpen(true);
  };

  const handleCloseModal = () => {
    setModalOpen(false);
  };

  return (
    <div className="min-h-screen bg-white text-black font-sans selection:bg-[#FF0000] selection:text-white">
      {/* 0. Navbar blanche inspirée wayi.bj */}
      <Navbar onOpenModal={handleOpenModal} />

      <main>
        {/* 1. HERO (Attention) : Fond BLANC, 2 colonnes */}
        <HeroSection onOpenModal={handleOpenModal} />

        {/* 2. PROBLÈME : Fond NOIR #000000, texte BLANC, icônes rouges */}
        <ProblemSection />

        {/* 3. MÉTHODE : Fond BLANC, Grille 3 cards blanches avec icône rouge */}
        <MethodSection onOpenModal={handleOpenModal} />

        {/* 4. BÉNÉFICES : Fond gris très clair #F9F9F9, 5 bénéfices avec check rouge */}
        <BenefitsSection />

        {/* 5. COMMENT ÇA MARCHE : Fond BLANC, 4 étapes avec gros chiffres 01 02 03 04 rouges */}
        <HowItWorksSection onOpenModal={handleOpenModal} />

        {/* 6. PREUVE SOCIALE : Fond NOIR, 3 chiffres clés en rouge, 2 cards témoignages blanches */}
        <SocialProofSection />

        {/* 7. FAQ : Fond BLANC, Accordéon avec questions Montserrat & icône + rouge qui pivote */}
        <FaqSection />

        {/* 8. APPEL FINAL : Fond NOIR avec CTA rouge et bouton WhatsApp */}
        <FinalCtaSection onOpenModal={handleOpenModal} />
      </main>

      {/* FOOTER : Noir #000000 */}
      <Footer />

      {/* Modal interactive de conversion */}
      <TestDriveModal
        isOpen={modalOpen}
        onClose={handleCloseModal}
        initialInterest={modalVehicle}
      />
    </div>
  );
}
