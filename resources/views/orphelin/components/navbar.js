class CustomNavbar extends HTMLElement {
    connectedCallback() {
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.innerHTML = `
            <style>
                .navbar {
                    background-color: white;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                }
                .nav-link {
                    position: relative;
                    padding: 0.5rem 0;
                }
                .nav-link:hover {
                    color: #3b82f6;
                }
                .nav-link::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background-color: #3b82f6;
                    transition: width 0.3s ease;
                }
                .nav-link:hover::after {
                    width: 100%;
                }
                .mobile-menu {
                    transition: all 0.3s ease;
                    max-height: 0;
                    overflow: hidden;
                }
                .mobile-menu.open {
                    max-height: 500px;
                }
                @media (min-width: 768px) {
                    .mobile-menu {
                        max-height: none !important;
                    }
                }
            </style>
            <nav class="navbar sticky top-0 z-50">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex justify-between items-center">
                        <a href="index.html" class="flex items-center">
                            <i data-feather="heart" class="text-blue-600 mr-2"></i>
                            <span class="text-xl font-bold text-gray-800">Entraide Hooralayn</span>
                        </a>
                        
                        <div class="hidden md:flex space-x-8">
                            <a href="index.html" class="nav-link text-gray-700 font-medium">Accueil</a>
                            <a href="apropos.html" class="nav-link text-gray-700 font-medium">À propos</a>
                            <a href="activites.html" class="nav-link text-gray-700 font-medium">Nos activités</a>
                            <a href="actualites.html" class="nav-link text-gray-700 font-medium">Actualités</a>
                            <a href="contact.html" class="nav-link text-gray-700 font-medium">Contact</a>
                            <a href="don.html" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">Faire un don</a>
                        </div>
                        
                        <button onclick="toggleMobileMenu()" class="md:hidden text-gray-700 focus:outline-none">
                            <i data-feather="menu"></i>
                        </button>
                    </div>
                    
                    <div id="mobile-menu" class="mobile-menu md:hidden hidden">
                        <div class="pt-4 pb-2 space-y-3">
                            <a href="index.html" class="block py-2 text-gray-700 hover:text-blue-600">Accueil</a>
                            <a href="apropos.html" class="block py-2 text-gray-700 hover:text-blue-600">À propos</a>
                            <a href="activites.html" class="block py-2 text-gray-700 hover:text-blue-600">Nos activités</a>
                            <a href="actualites.html" class="block py-2 text-gray-700 hover:text-blue-600">Actualités</a>
                            <a href="contact.html" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
                            <a href="don.html" class="block mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-medium hover:bg-blue-700 transition">Faire un don</a>
                        </div>
                    </div>
                </div>
            </nav>
        `;
    }
}

customElements.define('custom-navbar', CustomNavbar);