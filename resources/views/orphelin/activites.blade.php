<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos activités - Entraide Hooralayn</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50">
    <custom-navbar></custom-navbar>
    
    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Nos activités</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Découvrez nos différents programmes et actions sur le terrain.</p>
        </div>
        
        <div class="mb-16">
            <div class="flex flex-wrap justify-center mb-8">
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-blue-600 text-white rounded-full font-medium">Tous</button>
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-white text-gray-700 border border-gray-300 rounded-full font-medium hover:bg-gray-50">Éducation</button>
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-white text-gray-700 border border-gray-300 rounded-full font-medium hover:bg-gray-50">Santé</button>
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-white text-gray-700 border border-gray-300 rounded-full font-medium hover:bg-gray-50">Agriculture</button>
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-white text-gray-700 border border-gray-300 rounded-full font-medium hover:bg-gray-50">Urgences</button>
                <button class="filter-btn px-6 py-2 mx-2 mb-2 bg-white text-gray-700 border border-gray-300 rounded-full font-medium hover:bg-gray-50">Développement</button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="education">
                    <img src="{{ asset('imgs/classe.jpeg')}}" alt="Soutien scolaire" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-3">Éducation</span>
                        <h3 class="text-xl font-semibold mb-3">Soutien scolaire</h3>
                        <p class="text-gray-600 mb-4">Programme de tutorat pour les enfants défavorisés avec cours de rattrapage et activités éducatives.</p>
                        <a href="activite-details.html?id=1" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
                
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="sante">
                    <img src="{{ asset('imgs/dortoire.jpeg')}}" alt="Campagne médicale" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium mb-3">Santé</span>
                        <h3 class="text-xl font-semibold mb-3">Campagne médicale</h3>
                        <p class="text-gray-600 mb-4">Soins de santé gratuits dans les zones rurales avec consultations, médicaments et sensibilisation.</p>
                        <a href="activite-details.html?id=2" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
                
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="agriculture">
                    <img src="http://static.photos/agriculture/640x360/8" alt="Agriculture durable" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium mb-3">Agriculture</span>
                        <h3 class="text-xl font-semibold mb-3">Agriculture durable</h3>
                        <p class="text-gray-600 mb-4">Formation aux techniques agricoles modernes et distribution de semences améliorées.</p>
                        <a href="activite-details.html?id=3" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
                
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="urgence">
                    <img src="http://static.photos/people/640x360/9" alt="Aide d'urgence" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium mb-3">Urgences</span>
                        <h3 class="text-xl font-semibold mb-3">Aide d'urgence</h3>
                        <p class="text-gray-600 mb-4">Distribution de kits d'urgence (nourriture, couvertures, produits d'hygiène) aux populations vulnérables.</p>
                        <a href="activite-details.html?id=4" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
                
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="developpement">
                    <img src="http://static.photos/construction/640x360/10" alt="Infrastructures" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium mb-3">Développement</span>
                        <h3 class="text-xl font-semibold mb-3">Infrastructures communautaires</h3>
                        <p class="text-gray-600 mb-4">Construction et réhabilitation d'écoles, centres de santé et points d'eau potable.</p>
                        <a href="activite-details.html?id=5" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
                
                <div class="activity-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition" data-category="education">
                    <img src="http://static.photos/education/640x360/11" alt="Formation professionnelle" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-3">Éducation</span>
                        <h3 class="text-xl font-semibold mb-3">Formation professionnelle</h3>
                        <p class="text-gray-600 mb-4">Programmes de formation pour jeunes et adultes en métiers porteurs (couture, mécanique, etc.).</p>
                        <a href="activite-details.html?id=6" class="text-blue-600 font-medium inline-flex items-center">
                            En savoir plus <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <button class="bg-white border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition inline-flex items-center">
                    <i data-feather="rotate-cw" class="mr-2"></i> Charger plus d'activités
                </button>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl p-8 mb-12">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Soutenez nos activités</h2>
                <p class="text-xl mb-6">Votre don permet de financer directement nos programmes sur le terrain et d'avoir un impact concret.</p>
                <a href="don.html" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition">Faire un don</a>
            </div>
        </div>
        
        <div id="education" class="mb-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="http://static.photos/education/1024x576/12" alt="Programme éducatif" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Programme Éducatif</h2>
                        <p class="text-gray-600 mb-6">Notre programme éducatif vise à offrir un accès à une éducation de qualité aux enfants des communautés défavorisées. Nous intervenons à plusieurs niveaux :</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i data-feather="check" class="text-green-500 mr-3"></i>
                                <span>Construction et réhabilitation d'écoles</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check" class="text-green-500 mr-3"></i>
                                <span>Formation des enseignants</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check" class="text-green-500 mr-3"></i>
                                <span>Fourniture de matériel scolaire</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check" class="text-green-500 mr-3"></i>
                                <span>Cours de soutien et activités parascolaires</span>
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-4">
                            <div class="bg-blue-50 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-600">Bénéficiaires en 2023</p>
                                <p class="text-xl font-bold">1,200 enfants</p>
                            </div>
                            <div class="bg-blue-50 px-4 py-2 rounded-lg">
                                <p class="text-sm text-gray-600">Écoles soutenues</p>
                                <p class="text-xl font-bold">15 établissements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="sante" class="mb-16">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="md:flex flex-row-reverse">
                    <div class="md:w-1/2">
                        <img src="http://static.photos/medical/1024x576/13" alt="Programme de santé" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Programme de Santé</h2>
                        <p class="text-gray-600 mb-6">Notre programme de santé vise à améliorer l'accès aux soins de base dans les zones reculées et à sensibiliser les populations aux bonnes pratiques sanitaires.</p>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i data-feather="activity" class="text-green-600 mb-2"></i>
                                <p class="font-medium">Consultations médicales</p>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i data-feather="thermometer" class="text-green-600 mb-2"></i>
                                <p class="font-medium">Vaccinations</p>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i data-feather="heart" class="text-green-600 mb-2"></i>
                                <p class="font-medium">Santé maternelle</p>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i data-feather="droplet" class="text-green-600 mb-2"></i>
                                <p class="font-medium">Accès à l'eau potable</p>
                            </div>
                        </div>
                        <a href="contact.html" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-700 transition">Devenir partenaire santé</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <custom-footer></custom-footer>

    <script src="components/navbar.js"></script>
    <script src="components/footer.js"></script>
    <script src="script.js"></script>
    <script>
        // Filter activities
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const activityCards = document.querySelectorAll('.activity-card');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.textContent.trim().toLowerCase();
                    
                    // Update active button
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-600', 'text-white');
                        btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                    });
                    
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                    this.classList.add('bg-blue-600', 'text-white');
                    
                    // Filter cards
                    activityCards.forEach(card => {
                        if (filter === 'tous' || card.dataset.category === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    <script>feather.replace();</script>
</body>
</html>