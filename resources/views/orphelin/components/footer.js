class CustomFooter extends HTMLElement {
    connectedCallback() {
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.innerHTML = `
            <style>
                .footer {
                    background-color: #1e3a8a;
                }
                .footer-link {
                    transition: color 0.3s ease;
                }
                .footer-link:hover {
                    color: #93c5fd;
                }
                .social-icon {
                    transition: transform 0.3s ease, color 0.3s ease;
                }
                .social-icon:hover {
                    transform: translateY(-3px);
                    color: #93c5fd;
                }
                .newsletter-input {
                    border: none;
                    outline: none;
                }
                .newsletter-btn {
                    transition: background-color 0.3s ease;
                }
                .newsletter-btn:hover {
                    background-color: #1e40af;
                }
            </style>
            <footer class="footer text-white py-12">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <h3 class="text-xl font-bold mb-4">Entraide Hooralayn</h3>
                            <p class="mb-4 text-blue-200">Engagés pour un monde plus solidaire et équitable.</p>
                            <div class="flex space-x-4">
                                <a href="#" class="social-icon"><i data-feather="facebook"></i></a>
                                <a href="#" class="social-icon"><i data-feather="twitter"></i></a>
                                <a href="#" class="social-icon"><i data-feather="instagram"></i></a>
                                <a href="#" class="social-icon"><i data-feather="youtube"></i></a>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-4">Liens rapides</h4>
                            <ul class="space-y-2">
                                <li><a href="index.html" class="footer-link">Accueil</a></li>
                                <li><a href="apropos.html" class="footer-link">À propos</a></li>
                                <li><a href="activites.html" class="footer-link">Nos activités</a></li>
                                <li><a href="actualites.html" class="footer-link">Actualités</a></li>
                                <li><a href="contact.html" class="footer-link">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-4">Nos actions</h4>
                            <ul class="space-y-2">
                                <li><a href="activites.html#education" class="footer-link">Éducation</a></li>
                                <li><a href="activites.html#sante" class="footer-link">Santé</a></li>
                                <li><a href="activites.html#agriculture" class="footer-link">Agriculture</a></li>
                                <li><a href="activites.html#urgence" class="footer-link">Urgences</a></li>
                                <li><a href="activites.html#developpement" class="footer-link">Développement</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-4">Newsletter</h4>
                            <p class="text-blue-200 mb-4">Abonnez-vous pour recevoir nos dernières actualités.</p>
                            <div class="flex">
                                <input type="email" placeholder="Votre email" class="newsletter-input px-4 py-2 rounded-l-lg w-full text-gray-800">
                                <button class="newsletter-btn bg-blue-600 px-4 py-2 rounded-r-lg">
                                    <i data-feather="send"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-blue-800 mt-8 pt-8 text-center text-blue-300">
                        <p>© 2023 Entraide Hooralayn. Tous droits réservés.</p>
                    </div>
                </div>
            </footer>
        `;
    }
}

customElements.define('custom-footer', CustomFooter);