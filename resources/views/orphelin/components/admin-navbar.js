class CustomAdminNavbar extends HTMLElement {
    connectedCallback() {
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.innerHTML = `
            <style>
                .navbar {
                    height: 70px;
                    background-color: white;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                }
                .search-input {
                    background-color: #f9fafb;
                    transition: all 0.3s ease;
                }
                .search-input:focus {
                    background-color: white;
                }
                .notification-badge {
                    position: absolute;
                    top: -2px;
                    right: -2px;
                    width: 16px;
                    height: 16px;
                    font-size: 10px;
                }
                .dropdown {
                    transition: all 0.3s ease;
                    opacity: 0;
                    visibility: hidden;
                    transform: translateY(10px);
                }
                .dropdown.open {
                    opacity: 1;
                    visibility: visible;
                    transform: translateY(0);
                }
            </style>
            <div class="navbar sticky top-0 z-40 ml-[280px]">
                <div class="flex items-center justify-between h-full px-6">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="search" class="text-gray-400"></i>
                        </div>
                        <input type="text" class="search-input w-full pl-10 pr-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Rechercher...">
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="relative p-2 text-gray-500 hover:text-gray-700">
                            <i data-feather="bell"></i>
                            <span class="notification-badge bg-red-500 text-white rounded-full flex items-center justify-center">3</span>
                        </button>
                        
                        <div class="relative">
                            <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                                <img src="http://static.photos/people/40x40/31" alt="Admin" class="w-8 h-8 rounded-full">
                                <span class="font-medium">Admin</span>
                                <i data-feather="chevron-down" class="w-4 h-4"></i>
                            </button>
                            
                            <div id="user-dropdown" class="dropdown absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mon profil</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-t border-gray-100">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
}

customElements.define('custom-admin-navbar', CustomAdminNavbar);

// Add toggle functionality for user dropdown
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        if (e.target.closest('#user-menu-button')) {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('open');
        } else {
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('open');
            });
        }
    });
});