// public/js/components/admin-sidebar.js
class CustomAdminSidebar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
      <aside class="bg-blue-800 text-white w-64 min-h-screen flex-shrink-0 transition-all duration-300 ease-in-out">
        <!-- Logo -->
        <div class="p-6 border-b border-blue-700">
          <h2 class="text-xl font-bold">Entraide Hooralayn</h2>
          <p class="text-blue-200 text-sm mt-1">Administration</p>
        </div>

        <!-- Menu Navigation -->
        <nav class="p-4">
          <div class="space-y-2">
            <!-- Menu Item - Dashboard -->
            <a href="dashboard.html" class="flex items-center px-4 py-3 bg-blue-700 rounded-lg text-white font-medium">
              <i data-feather="home" class="w-5 h-5 mr-3"></i>
              Tableau de bord
            </a>

            <!-- Menu Item - Dons -->
            <a href="donations.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="dollar-sign" class="w-5 h-5 mr-3"></i>
              Gestion des dons
            </a>

            <!-- Menu Item - Bénévoles -->
            <a href="volunteers.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="users" class="w-5 h-5 mr-3"></i>
              Bénévoles
            </a>

            <!-- Menu Item - Projets -->
            <a href="projects.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="clipboard" class="w-5 h-5 mr-3"></i>
              Projets
            </a>

            <!-- Menu Item - Actualités -->
            <a href="news.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="file-text" class="w-5 h-5 mr-3"></i>
              Actualités
            </a>

            <!-- Menu Item - Messages -->
            <a href="messages.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="mail" class="w-5 h-5 mr-3"></i>
              Messages
              <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
            </a>

            <!-- Menu Item - Rapports -->
            <a href="reports.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="bar-chart" class="w-5 h-5 mr-3"></i>
              Rapports
            </a>

            <!-- Menu Item - Paramètres -->
            <a href="settings.html" class="flex items-center px-4 py-3 text-blue-200 hover:bg-blue-700 rounded-lg transition">
              <i data-feather="settings" class="w-5 h-5 mr-3"></i>
              Paramètres
            </a>
          </div>

          <!-- Section secondaire -->
          <div class="mt-8 pt-6 border-t border-blue-700">
            <h3 class="text-blue-300 text-sm font-medium uppercase mb-3 px-4">Support</h3>
            <div class="space-y-2">
              <a href="help.html" class="flex items-center px-4 py-2 text-blue-200 hover:bg-blue-700 rounded-lg transition">
                <i data-feather="help-circle" class="w-4 h-4 mr-3"></i>
                Aide & Support
              </a>
              <a href="documentation.html" class="flex items-center px-4 py-2 text-blue-200 hover:bg-blue-700 rounded-lg transition">
                <i data-feather="book" class="w-4 h-4 mr-3"></i>
                Documentation
              </a>
            </div>
          </div>
        </nav>

        <!-- User Profile -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-blue-700 bg-blue-800">
          <div class="flex items-center">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" 
                 alt="Profile" class="w-8 h-8 rounded-full mr-3">
            <div class="flex-1 min-w-0">
              <p class="text-sm font-medium truncate">Admin User</p>
              <p class="text-blue-300 text-xs truncate">admin@hooralayn.org</p>
            </div>
            <button id="sidebar-toggle" class="text-blue-300 hover:text-white md:hidden">
              <i data-feather="chevron-left" class="w-5 h-5"></i>
            </button>
          </div>
        </div>
      </aside>
    `;

    // Gestion du toggle de la sidebar sur mobile
    const sidebarToggle = this.querySelector('#sidebar-toggle');
    const sidebar = this.querySelector('aside');

    sidebarToggle?.addEventListener('click', () => {
      sidebar.classList.toggle('-ml-64');
    });

    // Fermer la sidebar en cliquant à l'extérieur sur mobile
    document.addEventListener('click', (event) => {
      if (window.innerWidth < 768 && !this.contains(event.target)) {
        sidebar.classList.add('-ml-64');
      }
    });
  }
}

customElements.define('custom-admin-sidebar', CustomAdminSidebar);