class CustomAdminSidebar extends HTMLElement {
    connectedCallback() {
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.innerHTML = `
            <style>
                .sidebar {
                    width: 280px;
                    background-color: #1e3a8a;
                    color: white;
                }
                .sidebar-link {
                    transition: all 0.3s ease;
                }
                .sidebar-link:hover {
                    background-color: #1e40af;
                }
                .sidebar-link.active {
                    background-color: #1e40af;
                    border-left: 4px solid #3b82f6;
                }
                .submenu {
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.3s ease;
                }
                .submenu.open {
                    max-height: 500px;
                }
            </style>
            <div class="sidebar h-screen fixed flex flex-col">
                <div class="p-6 border-b border-blue-800">
                    <a href="../index.html" class="flex items-center">
                        <i data-feather="heart" class="text-blue-300 mr-2"></i>
                        <span class="text-xl font-bold text-white">Entraide Hooralayn</span>
                    </a>
                    <p class="text-blue-300 text-sm mt-1">Administration</p>
                </div>
                
                <nav class="flex-1 overflow-y-auto py-4">
                    <div class="px-4 mb-6">
                        <div class="flex items-center px-4 py-3 bg-blue-700 rounded-lg">
                            <img src="http://static.photos/people/40x40/30" alt="Admin" class="w-8 h-8 rounded-full mr-3">
                            <div>
                                <p class="font-medium">Admin User</p>
                                <p class="text-blue-300 text-xs">Administrateur</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-1 px-2">
                        <a href="dashboard.html" class="flex items-center px-4 py-3 sidebar-link active">
                            <i data-feather="home" class="mr-3 w-5 h-5"></i>
                            <span>Tableau de bord</span>
                        </a>
                        
                        <div class="sidebar-menu">
                            <button class="flex items-center justify-between w-full px-4 py-3 sidebar-link">
                                <div class="flex items-center">
                                    <i data-feather="clipboard" class="mr-3 w-5 h-5"></i>
                                    <span>Activités</span>
                                </div>
                                <i data-feather="chevron-down" class="w-5 h-5 sidebar-arrow"></i>
                            </button>
                            <div class="submenu">
                                <a href="activities.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Liste des activités</a>
                                <a href="activity-add.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Ajouter une activité</a>
                                <a href="activity-categories.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Catégories</a>
                            </div>
                        </div>
                        
                        <div class="sidebar-menu">
                            <button class="flex items-center justify-between w-full px-4 py-3 sidebar-link">
                                <div class="flex items-center">
                                    <i data-feather="file-text" class="mr-3 w-5 h-5"></i>
                                    <span>Actualités</span>
                                </div>
                                <i data-feather="chevron-down" class="w-5 h-5 sidebar-arrow"></i>
                            </button>
                            <div class="submenu">
                                <a href="news.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Toutes les actualités</a>
                                <a href="news-add.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Ajouter une actualité</a>
                            </div>
                        </div>
                        
                        <div class="sidebar-menu">
                            <button class="flex items-center justify-between w-full px-4 py-3 sidebar-link">
                                <div class="flex items-center">
                                    <i data-feather="dollar-sign" class="mr-3 w-5 h-5"></i>
                                    <span>Dons</span>
                                </div>
                                <i data-feather="chevron-down" class="w-5 h-5 sidebar-arrow"></i>
                            </button>
                            <div class="submenu">
                                <a href="donations.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Tous les dons</a>
                                <a href="donations-pending.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Dons en attente</a>
                                <a href="donations-recurring.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Dons mensuels</a>
                            </div>
                        </div>
                        
                        <a href="volunteers.html" class="flex items-center px-4 py-3 sidebar-link">
                            <i data-feather="users" class="mr-3 w-5 h-5"></i>
                            <span>Bénévoles</span>
                        </a>
                        
                        <a href="partners.html" class="flex items-center px-4 py-3 sidebar-link">
                            <i data-feather="handshake" class="mr-3 w-5 h-5"></i>
                            <span>Partenaires</span>
                        </a>
                        
                        <div class="sidebar-menu">
                            <button class="flex items-center justify-between w-full px-4 py-3 sidebar-link">
                                <div class="flex items-center">
                                    <i data-feather="settings" class="mr-3 w-5 h-5"></i>
                                    <span>Paramètres</span>
                                </div>
                                <i data-feather="chevron-down" class="w-5 h-5 sidebar-arrow"></i>
                            </button>
                            <div class="submenu">
                                <a href="settings-general.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Général</a>
                                <a href="settings-users.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Utilisateurs</a>
                                <a href="settings-payments.html" class="block px-4 py-2 pl-12 text-sm sidebar-link">Paiements</a>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <div class="p-4 border-t border-blue-800">
                    <a href="../index.html" class="flex items-center px-3 py-2 text-sm sidebar-link rounded-lg">
                        <i data-feather="globe" class="mr-3 w-4 h-4"></i>
                        <span>Retour au site</span>
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-sm sidebar-link rounded-lg">
                        <i data-feather="log-out" class="mr-3 w-4 h-4"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>
            </div>
        `;
    }
}

customElements.define('custom-admin-sidebar', CustomAdminSidebar);

// Add toggle functionality for sidebar menus
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        if (e.target.closest('.sidebar-menu button')) {
            const menu = e.target.closest('.sidebar-menu');
            const submenu = menu.querySelector('.submenu');
            const arrow = menu.querySelector('.sidebar-arrow');
            
            submenu.classList.toggle('open');
            arrow.classList.toggle('rotate-180');
        }
    });
});