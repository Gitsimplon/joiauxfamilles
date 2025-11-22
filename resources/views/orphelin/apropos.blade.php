<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Entraide Hooralayn</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50">
    <custom-navbar></custom-navbar>
    
    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">À propos de nous</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Découvrez notre histoire, notre mission et notre équipe.</p>
        </div>
        
        <div class="mb-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="http://static.photos/people/1024x576/20" alt="Notre histoire" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Notre histoire</h2>
                        <p class="text-gray-600 mb-4">Fondée en 2010 par un groupe d'amis concernés par les inégalités sociales, Entraide Hooralayn est née de la volonté de créer un impact positif dans les communautés les plus vulnérables.</p>
                        <p class="text-gray-600 mb-6">Ce qui a commencé comme une petite initiative locale est rapidement devenu une organisation reconnue pour son travail dans les domaines de l'éducation, de la santé et du développement communautaire.</p>
                        <div class="flex flex-wrap gap-4">
                            <div class="bg-blue-50 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-600">Année de création</p>
                                <p class="text-xl font-bold">2010</p>
                            </div>
                            <div class="bg-blue-50 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-600">Projets réalisés</p>
                                <p class="text-xl font-bold">45+</p>
                            </div>
                            <div class="bg-blue-50 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-600">Zones d'intervention</p>
                                <p class="text-xl font-bold">12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-16">
            <div class="bg-blue-600 text-white rounded-xl p-8 text-center mb-8">
                <h2 class="text-3xl font-bold mb-4">Notre mission</h2>
                <p class="text-xl max-w-3xl mx-auto">Promouvoir le développement durable des communautés vulnérables à travers l'éducation, la santé et l'autonomisation économique.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="book" class="text-blue-600 h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Éducation</h3>
                    <p class="text-gray-600">Accès à une éducation de qualité pour tous, avec un accent particulier sur les filles et les enfants défavorisés.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="heart" class="text-blue-600 h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Santé</h3>
                    <p class="text-gray-600">Amélioration de l'accès aux soins de santé primaires et promotion des bonnes pratiques sanitaires.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-feather="trending-up" class="text-blue-600 h-8 w-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Développement</h3>
                    <p class="text-gray-600">Autonomisation économique des communautés à travers des projets durables et respectueux de l'environnement.</p>
                </div>
            </div>
        </div>
        
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Notre équipe</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="http://static.photos/people/400x400/21" alt="Directrice" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Aminata Diallo</h3>
                        <p class="text-blue-600 mb-3">Directrice Exécutive</p>
                        <p class="text-gray-600 text-sm">Fondatrice de l'ONG avec 15 ans d'expérience dans le développement communautaire.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="http://static.photos/people/400x400/22" alt="Coordinateur" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Moussa Traoré</h3>
                        <p class="text-blue-600 mb-3">Coordinateur des Projets</p>
                        <p class="text-gray-600 text-sm">Spécialiste en gestion de projets avec une expertise en éducation inclusive.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="http://static.photos/people/400x400/23" alt="Responsable santé" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Dr. Fatoumata Keita</h3>
                        <p class="text-blue-600 mb-3">Responsable Santé</p>
                        <p class="text-gray-600 text-sm">Médecin avec 10 ans d'expérience en santé publique et médecine préventive.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="http://static.photos/people/400x400/24" alt="Finances" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Boubacar Camara</h3>
                        <p class="text-blue-600 mb-3">Responsable Finances</p>
                        <p class="text-gray-600 text-sm">Expert-comptable spécialisé dans la gestion des organisations à but non lucratif.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex flex-row-reverse">
                    <div class="md:w-1/2">
                        <img src="http://static.photos/office/1024x576/25" alt="Nos partenaires" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Nos partenaires</h2>
                        <p class="text-gray-600 mb-6">Nous travaillons en étroite collaboration avec des organisations locales et internationales pour maximiser notre impact.</p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                <span class="font-bold text-gray-700">UNICEF</span>
                            </div>
                            <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                <span class="font-bold text-gray-700">Croix-Rouge</span>
                            </div>
                            <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                <span class="font-bold text-gray-700">Ministère de la Santé</span>
                            </div>
                            <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                <span class="font-bold text-gray-700">ActionAid</span>
                            </div>
                        </div>
                        
                        <a href="contact.html" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Devenir partenaire</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Rejoignez notre équipe</h2>
            <p class="text-xl mb-6">Que ce soit en tant que bénévole, partenaire ou donateur, votre soutien fait la différence.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="contact.html" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Nous contacter</a>
                <a href="don.html" class="border-2 border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Faire un don</a>
            </div>
        </div>
    </main>

    <custom-footer></custom-footer>

    <script src="components/navbar.js"></script>
    <script src="components/footer.js"></script>
    <script src="script.js"></script>
    <script>feather.replace();</script>
</body>
</html>