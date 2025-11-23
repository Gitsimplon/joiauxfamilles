// components/navbar.js
class CustomNavbar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
      <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
          <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
              <a href="/" class="text-2xl font-bold text-blue-600">Entraide Hooralayn</a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
              <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Accueil</a>
              <a href="activites" class="text-gray-700 hover:text-blue-600 font-medium transition">Nos activités</a>
              <a href="actualites" class="text-gray-700 hover:text-blue-600 font-medium transition">Actualités</a>
              <a href="apropos" class="text-gray-700 hover:text-blue-600 font-medium transition">À propos</a>
              <a href="contact" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
              <a href="don" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">Faire un don</a>
            </div>

            <!-- Bouton menu mobile -->
            <div class="md:hidden">
              <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </button>
            </div>
          </div>

          <!-- Menu Mobile -->
          <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-4">
              <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Accueil</a>
              <a href="activites" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Nos activités</a>
              <a href="actualites" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Actualités</a>
              <a href="apropos" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">À propos</a>
              <a href="contact" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Contact</a>
              <a href="don" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition text-center">Faire un don</a>
            </div>
          </div>
        </div>
      </nav>
    `;

    // Gestion du menu mobile
    const mobileMenuButton = this.querySelector('#mobile-menu-button');
    const mobileMenu = this.querySelector('#mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      
      // Animation de l'icône hamburger
      const icon = mobileMenuButton.querySelector('svg');
      if (mobileMenu.classList.contains('hidden')) {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
      } else {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
      }
    });

    // Fermer le menu mobile en cliquant à l'extérieur
    document.addEventListener('click', (event) => {
      if (!this.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
        const icon = mobileMenuButton.querySelector('svg');
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
      }
    });
  }
}

customElements.define('custom-navbar', CustomNavbar);