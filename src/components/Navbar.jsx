import React, { useState, useEffect } from 'react';
import { Menu, X as CloseIcon, Car } from 'lucide-react';
import { NOM_AGENCE } from '../constants';

export default function Navbar({ onOpenModal }) {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navLinks = [
    { label: 'Nos Voitures', href: '#stock' },
    { label: 'La Méthode', href: '#methode' },
    { label: 'Bénéfices', href: '#benefices' },
    { label: 'Comment ça marche', href: '#comment-ca-marche' },
    { label: 'Avis clients', href: '#temoignages' },
    { label: 'FAQ', href: '#faq' },
  ];

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled
          ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-[#E5E5E5] py-3.5'
          : 'bg-white border-b border-[#E5E5E5]/60 py-4 lg:py-5'
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between">
          {/* Logo gauche */}
          <a href="#" className="flex items-center gap-3 group focus:outline-none">
            <img
              src="/logo.png"
              alt="Logo"
              className="h-9 sm:h-10 w-auto object-contain transition-transform group-hover:scale-105"
            />
            <span className="hidden sm:inline-block font-montserrat font-extrabold text-sm tracking-wider uppercase text-black border-l border-[#E5E5E5] pl-3">
              {NOM_AGENCE}
            </span>
          </a>

          {/* Menu Desktop */}
          <nav className="hidden lg:flex items-center gap-8">
            {navLinks.map((link) => (
              <a
                key={link.label}
                href={link.href}
                className="text-sm font-medium text-[#52525B] hover:text-[#000000] hover:font-semibold transition-colors"
              >
                {link.label}
              </a>
            ))}
          </nav>

          {/* CTA Droit */}
          <div className="hidden sm:flex items-center gap-4">
            <a
              href="#stock"
              className="inline-flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold px-7 py-3 text-sm hover:bg-[#CC0000] transition-all duration-200 shadow-md hover:shadow-red-500/20 hover:-translate-y-0.5"
            >
              <Car className="w-4 h-4 mr-2" />
              Voir les voitures
            </a>
          </div>

          {/* Mobile hamburger */}
          <div className="flex items-center gap-2 lg:hidden">
            <a
              href="#stock"
              className="sm:hidden inline-flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold px-4 py-2 text-xs hover:bg-[#CC0000]"
            >
              Voitures
            </a>
            <button
              type="button"
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
              className="p-2 rounded-xl text-black hover:bg-gray-100 transition-colors focus:outline-none"
              aria-label="Ouvrir le menu"
            >
              {mobileMenuOpen ? <CloseIcon className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>

        {/* Mobile menu drawer */}
        {mobileMenuOpen && (
          <div className="lg:hidden mt-4 pt-4 border-t border-[#E5E5E5] pb-4 bg-white animate-fadeIn">
            <div className="flex flex-col gap-3">
              {navLinks.map((link) => (
                <a
                  key={link.label}
                  href={link.href}
                  onClick={() => setMobileMenuOpen(false)}
                  className="px-3 py-2 text-base font-semibold text-black hover:text-[#FF0000] hover:bg-gray-50 rounded-lg transition-colors"
                >
                  {link.label}
                </a>
              ))}
              <div className="pt-2">
                <a
                  href="#stock"
                  onClick={() => setMobileMenuOpen(false)}
                  className="w-full flex items-center justify-center rounded-full bg-[#FF0000] text-white font-bold py-3 text-center hover:bg-[#CC0000]"
                >
                  <Car className="w-4 h-4 mr-2" />
                  Voir les voitures disponibles
                </a>
              </div>
            </div>
          </div>
        )}
      </div>
    </header>
  );
}
