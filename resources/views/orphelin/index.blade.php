<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entraide Hooralayn - Plateforme Solidaire</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50">
    <custom-navbar></custom-navbar>
    
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="bg-blue-600 text-white rounded-xl p-8 mb-12">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">Solidarité pour un avenir meilleur</h1>
                <p class="text-xl mb-8">Rejoignez notre mouvement pour soutenir les communautés vulnérables grâce à l'éducation, la santé et le développement durable.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="don" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Faire un don</a>
                    <a href="activites" class="border-2 border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Nos activités</a>
                </div>
            </div>
        </section>

        <!-- Featured Activities -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Nos Actions Récentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('imgs/jardin.jpeg') }}"  alt="Soutien scolaire" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Soutien scolaire</h3>
                        <p class="text-gray-600 mb-4">Programme de tutorat pour les enfants défavorisés.</p>
                        <a href="activites#education" class="text-blue-600 font-medium">En savoir plus →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('imgs/jardin.jpeg') }}"  alt="Campagne médicale" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Campagne médicale</h3>
                        <p class="text-gray-600 mb-4">Soins de santé gratuits dans les zones rurales.</p>
                        <a href="activites#sante" class="text-blue-600 font-medium">En savoir plus →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('imgs/jardin.jpeg') }}"  alt="Agriculture durable" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Agriculture durable</h3>
                        <p class="text-gray-600 mb-4">Formation aux techniques agricoles modernes.</p>
                        <a href="activites#agriculture" class="text-blue-600 font-medium">En savoir plus →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-blue-50 rounded-xl p-8 mb-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl font-bold text-blue-600 mb-2">1,200+</p>
                    <p class="text-gray-600">Bénéficiaires</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-blue-600 mb-2">45</p>
                    <p class="text-gray-600">Projets réalisés</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-blue-600 mb-2">300+</p>
                    <p class="text-gray-600">Volontaires</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-blue-600 mb-2">12</p>
                    <p class="text-gray-600">Communautés</p>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Actualités Récentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('imgs/jardin.jpeg') }}"  alt="Nouvelle école" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600">15 Juin 2023</span>
                        <h3 class="text-xl font-semibold mb-2">Inauguration d'une nouvelle école</h3>
                        <p class="text-gray-600 mb-4">Nous avons le plaisir d'annoncer l'ouverture de notre nouvelle école dans la région de...</p>
                        <a href="actualites#ecole" class="text-blue-600 font-medium">Lire l'article →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('imgs/jardin.jpeg') }}"  alt="Mission médicale" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600">2 Juin 2023</span>
                        <h3 class="text-xl font-semibold mb-2">Mission médicale réussie</h3>
                        <p class="text-gray-600 mb-4">Notre équipe médicale a pu soigner plus de 200 patients lors de notre dernière...</p>
                        <a href="actualites#mission" class="text-blue-600 font-medium">Lire l'article →</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="actualites" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Voir toutes les actualités</a>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ensemble, faisons la différence</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Votre soutien nous permet de continuer nos actions sur le terrain. Chaque contribution compte.</p>
            <a href="don" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Faire un don maintenant</a>
        </section>
    </main>

    <custom-footer></custom-footer>

    <script src="components/navbar.js"></script>
    <script src="components/footer.js"></script>
    <script src="script.js"></script>
    <script>feather.replace();</script>
<script src="https://huggingface.co/deepsite/deepsite-badge.js"></script>
</body>
</html>