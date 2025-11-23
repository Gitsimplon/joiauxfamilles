// public/js/components/admin-navbar.js
class CustomAdminNavbar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
      <header class="bg-white shadow-sm border-b">
        <div class="flex items-center justify-between p-4">
          <!-- Left side - Menu toggle and breadcrumb -->
          <div class="flex items-center space-x-4">
            <!-- Menu toggle for mobile -->
            <button id="mobile-menu-toggle" class="text-gray-600 hover:text-blue-600 md:hidden">
              <i data-feather="menu" class="w-6 h-6"></i>
            </button>
            
            <!-- Breadcrumb -->
            <nav class="hidden md:flex items-center space-x-2 text-sm text-gray-500">
              <a href="dashboard.html" class="hover:text-blue-600">Tableau de bord</a>
              <i data-feather="chevron-right" class="w-4 h-4"></i>
              <span class="text-gray-700">Accueil</span>
            </nav>
          </div>

          <!-- Right side - Search and user menu -->
          <div class="flex items-center space-x-4">
            <!-- Search -->
            <div class="relative hidden md:block">
              <input type="text" placeholder="Rechercher..." 
                     class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-4 h-4"></i>
            </div>

            <!-- Notifications -->
            <div class="relative">
              <button class="p-2 text-gray-600 hover:text-blue-600 relative">
                <i data-feather="bell" class="w-5 h-5"></i>
                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
              </button>
            </div>

            <!-- User menu -->
            <div class="relative">
              <button id="user-menu-button" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=face" 
                     alt="Profile" class="w-8 h-8 rounded-full">
                <span class="hidden md:block text-sm font-medium">Admin User</span>
                <i data-feather="chevron-down" class="w-4 h-4 hidden md:block"></i>
              </button>

              <!-- Dropdown menu -->
              <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border py-1 z-50">
                <a href="profile.html" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i data-feather="user" class="w-4 h-4 mr-3"></i>
                  Mon profil
                </a>
                <a href="settings.html" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i data-feather="settings" class="w-4 h-4 mr-3"></i>
                  Paramètres
                </a>
                <div class="border-t my-1"></div>
                <a href="../index.html" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i data-feather="globe" class="w-4 h-4 mr-3"></i>
                  Voir le site
                </a>
                <div class="border-t my-1"></div>
                <a href="login.html" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                  <i data-feather="log-out" class="w-4 h-4 mr-3"></i>
                  Déconnexion
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
    `;

    // Gestion du toggle du menu mobile
    const mobileMenuToggle = this.querySelector('#mobile-menu-toggle');
    const sidebar = document.querySelector('custom-admin-sidebar aside');

    mobileMenuToggle?.addEventListener('click', () => {
      sidebar?.classList.toggle('-ml-64');
    });

    // Gestion du menu utilisateur
    const userMenuButton = this.querySelector('#user-menu-button');
    const userMenu = this.querySelector('#user-menu');

    userMenuButton?.addEventListener('click', (e) => {
      e.stopPropagation();
      userMenu.classList.toggle('hidden');
    });

    // Fermer le menu utilisateur en cliquant à l'extérieur
    document.addEventListener('click', () => {
      userMenu?.classList.add('hidden');
    });

    // Empêcher la fermeture quand on clique dans le menu
    userMenu?.addEventListener('click', (e) => {
      e.stopPropagation();
    });
  }
}

customElements.define('custom-admin-navbar', CustomAdminNavbar);