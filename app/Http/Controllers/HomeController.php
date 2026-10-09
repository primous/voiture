<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Affiche la landing page de Reinex avec les données dynamiques.
     */
    public function index(): View
    {
        // Données dynamiques des véhicules vérifiés disponibles
        $vehicles = [
            [
                'id' => 1,
                'title' => 'Peugeot 3008 GT Line',
                'subtitle' => '1.2 PureTech 130ch EAT8 · Finition Premium',
                'price' => '21 900 €',
                'monthly' => '249 €/mois',
                'year' => '2021',
                'mileage' => '42 500 km',
                'gearbox' => 'Automatique EAT8',
                'fuel' => 'Essence',
                'warranty' => 'Garantie 12 mois',
                'image' => '/images/car-peugeot.jpg',
                'tag' => 'Coup de cœur',
            ],
            [
                'id' => 2,
                'title' => 'Mercedes-Benz Classe A 200',
                'subtitle' => 'AMG Line 7G-DCT · Toit panoramique · Pack Sport',
                'price' => '27 490 €',
                'monthly' => '315 €/mois',
                'year' => '2022',
                'mileage' => '34 800 km',
                'gearbox' => 'Automatique 7G',
                'fuel' => 'Essence',
                'warranty' => 'Garantie 12 mois',
                'image' => '/images/car-mercedes.jpg',
                'tag' => 'Prête à rouler',
            ],
            [
                'id' => 3,
                'title' => 'Audi Q7 3.0 TDI Quattro',
                'subtitle' => 'S-Line Tiptronic · 7 Places · Historique limpide',
                'price' => '38 900 €',
                'monthly' => '430 €/mois',
                'year' => '2020',
                'mileage' => '68 000 km',
                'gearbox' => 'Automatique Tiptronic',
                'fuel' => 'Diesel',
                'warranty' => 'Garantie 12 mois',
                'image' => '/images/hero-car.jpg',
                'tag' => 'Certifiée CPO',
            ],
        ];

        // Témoignages réels et authentiques
        $testimonials = [
            [
                'id' => 1,
                'quote' => 'J’avais peur d’acheter d’occasion. Ici, tout m’a été expliqué, et ma voiture roule parfaitement depuis 8 mois.',
                'author' => 'Thomas D.',
                'vehicle' => 'Achat Peugeot 3008',
                'rating' => 5,
            ],
            [
                'id' => 2,
                'quote' => 'Prix honnête, accueil sérieux, aucune surprise après l’achat.',
                'author' => 'Marc V.',
                'vehicle' => 'Achat Mercedes Classe A',
                'rating' => 5,
            ],
            [
                'id' => 3,
                'quote' => 'L’équipe Reinex m’a accompagné du premier essai jusqu’à la remise des clés.',
                'author' => 'Sophie L.',
                'vehicle' => 'Achat Audi Q7',
                'rating' => 5,
            ],
        ];

        // Les 8 questions/réponses FAQ obligatoires
        $faqs = [
            [
                'id' => 1,
                'question' => 'Les voitures sont-elles vraiment contrôlées ?',
                'answer' => 'Oui. Chaque véhicule passe une inspection en 50 points : moteur, boîte, freins, électronique et carrosserie avant sa mise en vente.',
            ],
            [
                'id' => 2,
                'question' => 'Puis-je essayer la voiture avant d’acheter ?',
                'answer' => 'Oui, l’essai est gratuit et sans engagement.',
            ],
            [
                'id' => 3,
                'question' => 'Quelle garantie est incluse ?',
                'answer' => 'Tous nos véhicules sont garantis 6 à 12 mois. Les détails de couverture vous sont remis avant l’achat.',
            ],
            [
                'id' => 4,
                'question' => 'Puis-je payer en plusieurs fois ?',
                'answer' => 'Oui, nous proposons des facilités de paiement adaptées à votre budget. Parlez-en à un conseiller.',
            ],
            [
                'id' => 5,
                'question' => 'Reprenez-vous mon ancien véhicule ?',
                'answer' => 'Oui, nous évaluons gratuitement votre véhicule et vous proposons un prix de reprise juste.',
            ],
            [
                'id' => 6,
                'question' => 'Qui s’occupe des papiers ?',
                'answer' => 'Nous nous occupons des démarches nécessaires. Vous repartez avec un dossier complet et en règle.',
            ],
            [
                'id' => 7,
                'question' => 'Le prix affiché est-il négociable ou final ?',
                'answer' => 'Le prix affiché est le prix payé, sans frais cachés. C\'est un prix juste et ferme basé sur la cote réelle et l\'état certifié du véhicule.',
            ],
            [
                'id' => 8,
                'question' => 'Comment réserver un véhicule ?',
                'answer' => 'Appelez-nous, écrivez-nous sur WhatsApp ou réservez un essai en ligne. Vous recevrez une réponse sous 24 heures.',
            ],
        ];

        // Données chiffrées & statistiques réelles
        $stats = [
            'sold_cars' => '540+',
            'satisfaction' => '98%',
            'experience_years' => '8',
        ];

        // Coordonnées et points de contact
        $contacts = [
            'phone' => '+33189000000',
            'phone_display' => '01 89 00 00 00',
            'whatsapp' => '33189000000',
            'email' => 'contact@reinex.fr',
            'address' => '45 Avenue de l\'Automobile, 75017 Paris',
            'hours' => 'Du lundi au samedi : 09h00 - 19h00',
        ];

        return view('pages.home', compact('vehicles', 'testimonials', 'faqs', 'stats', 'contacts'));
    }
}
