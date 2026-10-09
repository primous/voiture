@props([
    'title' => 'Reinex | Voitures d\'occasion vérifiées, garanties & prêtes à rouler',
    'description' => 'Votre prochaine voiture est ici, vérifiée en 50 points, garantie et prête à rouler. Fini les mauvaises surprises avec Reinex : réservez un essai gratuit ou contactez-nous.',
    'contacts' => [],
    'vehicles' => [],
])

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Essentiel -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="voiture occasion garantie, achat voiture certifiee, occasion 50 points, reinex automobile, reprise vehicule occasion">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Réseaux sociaux -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ asset('images/hero-car.jpg') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="{{ asset('images/hero-car.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/logo-reinex.png">

    <!-- Typographie Premium Google Fonts : Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Données structurées Schema.org JSON-LD (AutoDealer / LocalBusiness) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AutoDealer",
      "name": "Reinex",
      "image": "{{ asset('images/logo-reinex.png') }}",
      "description": "Agence automobile spécialisée dans la vente de voitures d'occasion vérifiées en 50 points, garanties et prêtes à rouler.",
      "telephone": "{{ $contacts['phone'] ?? '+33189000000' }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "45 Avenue de l'Automobile",
        "addressLocality": "Paris",
        "postalCode": "75017",
        "addressCountry": "FR"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:00",
          "closes": "19:00"
        }
      ],
      "priceRange": "$$"
    }
    </script>
</head>
<body class="bg-white text-black font-sans selection:bg-[#FF0000] selection:text-white min-h-screen flex flex-col justify-between">
    <!-- Header Sticky avec Logo Reinex officiel -->
    <x-header :contacts="$contacts" />

    <!-- Contenu Principal -->
    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer Noir Élégant -->
    <x-footer :contacts="$contacts" />

    <!-- Modale interactive Alpine.js de réservation d'essai / reprise -->
    <x-test-drive-modal :vehicles="$vehicles" />
</body>
</html>
