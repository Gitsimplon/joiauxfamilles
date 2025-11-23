{{-- resources/views/admin/news-add.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(isset($news)) Modifier l'actualité @else Ajouter une actualité @endif - Entraide Hooralayn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/ckeditor.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
        .image-preview {
            max-height: 200px;
            object-fit: cover;
        }
        .drag-over {
            border: 2px dashed #3b82f6;
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <custom-admin-sidebar></custom-admin-sidebar>
        
        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            <custom-admin-navbar></custom-admin-navbar>
            
            <!-- Main content -->
            <main class="flex-1 overflow-auto p-6">
                <!-- Header -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-3xl font-bold">
                                @if(isset($news))
                                    Modifier l'actualité
                                @else
                                    Ajouter une actualité
                                @endif
                            </h1>
                            <p class="text-gray-600">
                                @if(isset($news))
                                    Modifiez les informations de l'actualité
                                @else
                                    Créez une nouvelle actualité pour votre site
                                @endif
                            </p>
                        </div>
                        <a href="{{ route('admin.news.index') }}" 
                           class="bg-gray-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-600 transition flex items-center">
                            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
                            Retour
                        </a>
                    </div>
                </div>

                <!-- Form -->
                <form action="{{ isset($news) ? route('admin.news.update', $news->id) : route('admin.news.store') }}" 
                      method="POST" 
                      enctype="multipart/form-data" 
                      class="bg-white rounded-xl shadow-md p-6 mb-8">
                    @csrf
                    @if(isset($news))
                        @method('PUT')
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Colonne principale -->
                        <div class="lg:col-span-2 space-y-6">
                            <!-- Titre -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Titre de l'actualité *
                                </label>
                                <input type="text" 
                                       id="title" 
                                       name="title" 
                                       value="{{ old('title', $news->title ?? '') }}"
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Entrez le titre de l'actualité">
                                @error('title')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Slug -->
                            <div>
                                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">
                                    Slug (URL) *
                                </label>
                                <input type="text" 
                                       id="slug" 
                                       name="slug" 
                                       value="{{ old('slug', $news->slug ?? '') }}"
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="titre-de-l-actualite">
                                @error('slug')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Extrait -->
                            <div>
                                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">
                                    Extrait *
                                </label>
                                <textarea id="excerpt" 
                                          name="excerpt" 
                                          rows="3"
                                          required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                          placeholder="Brève description de l'actualité">{{ old('excerpt', $news->excerpt ?? '') }}</textarea>
                                @error('excerpt')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Contenu -->
                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                                    Contenu *
                                </label>
                                <textarea id="content" 
                                          name="content" 
                                          class="hidden">{{ old('content', $news->content ?? '') }}</textarea>
                                <div id="editor"></div>
                                @error('content')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Colonne latérale -->
                        <div class="space-y-6">
                            <!-- Image principale -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Image principale *
                                </label>
                                
                                <!-- Zone de dépôt d'image -->
                                <div id="image-drop-zone" 
                                     class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-blue-400 transition">
                                    <input type="file" 
                                           id="featured_image" 
                                           name="featured_image" 
                                           accept="image/*" 
                                           class="hidden"
                                           {{ !isset($news) ? 'required' : '' }}>
                                    
                                    <div id="image-preview-container">
                                        @if(isset($news) && $news->featured_image)
                                            <img src="{{ asset('storage/' . $news->featured_image) }}" 
                                                 alt="Preview" 
                                                 class="image-preview w-full rounded-lg mb-3">
                                            <button type="button" 
                                                    id="change-image" 
                                                    class="text-blue-600 hover:text-blue-800 text-sm">
                                                Changer l'image
                                            </button>
                                        @else
                                            <i data-feather="upload" class="w-12 h-12 text-gray-400 mx-auto mb-3"></i>
                                            <p class="text-sm text-gray-600 mb-2">
                                                Glissez-déposez une image ou cliquez pour sélectionner
                                            </p>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, JPEG jusqu'à 5MB
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                @error('featured_image')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Statut -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Statut
                                </label>
                                <select name="status" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="draft" {{ old('status', $news->status ?? '') == 'draft' ? 'selected' : '' }}>
                                        Brouillon
                                    </option>
                                    <option value="published" {{ old('status', $news->status ?? '') == 'published' ? 'selected' : '' }}>
                                        Publié
                                    </option>
                                    <option value="archived" {{ old('status', $news->status ?? '') == 'archived' ? 'selected' : '' }}>
                                        Archivé
                                    </option>
                                </select>
                            </div>

                            <!-- Catégorie -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Catégorie *
                                </label>
                                <select name="category_id" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="1" {{ old('category_id', $news->category_id ?? '') == 1 ? 'selected' : '' }}>
                                        Éducation
                                    </option>
                                    <option value="2" {{ old('category_id', $news->category_id ?? '') == 2 ? 'selected' : '' }}>
                                        Santé
                                    </option>
                                    <option value="3" {{ old('category_id', $news->category_id ?? '') == 3 ? 'selected' : '' }}>
                                        Développement durable
                                    </option>
                                    <option value="4" {{ old('category_id', $news->category_id ?? '') == 4 ? 'selected' : '' }}>
                                        Événements
                                    </option>
                                    <option value="5" {{ old('category_id', $news->category_id ?? '') == 5 ? 'selected' : '' }}>
                                        Témoignages
                                    </option>
                                </select>
                                @error('category_id')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Date de publication -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label for="published_at" class="block text-sm font-medium text-gray-700 mb-3">
                                    Date de publication
                                </label>
                                <input type="datetime-local" 
                                       id="published_at" 
                                       name="published_at" 
                                       value="{{ old('published_at', isset($news) && $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i')) }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Auteur -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Auteur
                                </label>
                                <input type="text" 
                                       name="author" 
                                       value="{{ old('author', $news->author ?? 'Admin Hooralayn') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Nom de l'auteur">
                            </div>

                            <!-- Mots-clés -->
                            <div class="bg-gray-50 rounded-lg p-4">
                                <label for="tags" class="block text-sm font-medium text-gray-700 mb-3">
                                    Mots-clés
                                </label>
                                <input type="text" 
                                       id="tags" 
                                       name="tags" 
                                       value="{{ old('tags', $news->tags ?? '') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="solidarité, éducation, santé...">
                                <p class="text-xs text-gray-500 mt-1">Séparez les mots-clés par des virgules</p>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-end space-x-4 mt-8 pt-6 border-t">
                        <a href="{{ route('admin.news.index') }}" 
                           class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition">
                            Annuler
                        </a>
                        <button type="submit" 
                                name="action" 
                                value="draft"
                                class="px-6 py-3 bg-gray-500 text-white rounded-lg font-medium hover:bg-gray-600 transition">
                            Enregistrer comme brouillon
                        </button>
                        <button type="submit" 
                                name="action" 
                                value="publish"
                                class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition">
                            @if(isset($news))
                                Mettre à jour
                            @else
                                Publier l'actualité
                            @endif
                        </button>
                    </div>
                </form>

                <!-- Preview (si édition) -->
                @if(isset($news))
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold mb-4">Aperçu</h2>
                    <div class="border rounded-lg p-4 bg-gray-50">
                        <p class="text-gray-600">
                            L'actualité est actuellement 
                            @if($news->status === 'published')
                                <span class="text-green-600 font-medium">publiée</span>
                            @elseif($news->status === 'draft')
                                <span class="text-yellow-600 font-medium">en brouillon</span>
                            @else
                                <span class="text-gray-600 font-medium">archivée</span>
                            @endif
                        </p>
                        <div class="mt-4 flex space-x-3">
                            <a href="{{ route('news.show', $news->slug) }}" 
                               target="_blank"
                               class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                <i data-feather="eye" class="w-4 h-4 mr-2"></i>
                                Voir sur le site
                            </a>
                            @if($news->status === 'published')
                                <form action="{{ route('admin.news.unpublish', $news->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" 
                                            class="inline-flex items-center text-yellow-600 hover:text-yellow-800">
                                        <i data-feather="eye-off" class="w-4 h-4 mr-2"></i>
                                        Dépublier
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </main>
        </div>
    </div>

    <!-- Composants -->
    <script src="{{ asset('js/components/admin-sidebar.js') }}"></script>
    <script src="{{ asset('js/components/admin-navbar.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser Feather Icons
            feather.replace();

            // Éditeur CKEditor
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    toolbar: {
                        items: [
                            'heading', '|',
                            'bold', 'italic', 'underline', 'strikethrough', '|',
                            'link', 'blockQuote', 'codeBlock', '|',
                            'bulletedList', 'numberedList', 'todoList', '|',
                            'outdent', 'indent', '|',
                            'imageUpload', 'insertTable', 'mediaEmbed', '|',
                            'undo', 'redo', '|',
                            'alignment', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                        ]
                    },
                    language: 'fr',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',
                })
                .then(editor => {
                    window.editor = editor;
                    
                    // Synchroniser avec le textarea caché
                    editor.model.document.on('change:data', () => {
                        document.getElementById('content').value = editor.getData();
                    });

                    // Pré-remplir l'éditeur si en mode édition
                    
                    
                    @if(isset($news))
                        editor.setData(`{!! old('content', $news->content) !!}`);
                    @endif
                    
                })
                .catch(error => {
                    console.error(error);
                });

            // Génération automatique du slug
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function() {
                if (!slugInput.dataset.manual) {
                    const slug = titleInput.value
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                    slugInput.value = slug;
                }
            });

            slugInput.addEventListener('input', function() {
                if (this.value) {
                    this.dataset.manual = 'true';
                }
            });

            // Gestion de l'upload d'image
            const dropZone = document.getElementById('image-drop-zone');
            const fileInput = document.getElementById('featured_image');
            const previewContainer = document.getElementById('image-preview-container');
            const changeImageBtn = document.getElementById('change-image');

            // Click sur la zone de dépôt
            dropZone.addEventListener('click', function() {
                fileInput.click();
            });

            // Changement manuel d'image
            if (changeImageBtn) {
                changeImageBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    fileInput.click();
                });
            }

            // Gestion du drag and drop
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                dropZone.classList.add('drag-over');
            }

            function unhighlight() {
                dropZone.classList.remove('drag-over');
            }

            // Gestion du drop
            dropZone.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                fileInput.files = files;
                handleFiles(files);
            }

            // Gestion de la sélection de fichier
            fileInput.addEventListener('change', function() {
                handleFiles(this.files);
            });

            function handleFiles(files) {
                if (files.length > 0) {
                    const file = files[0];
                    
                    // Validation du type de fichier
                    if (!file.type.match('image.*')) {
                        alert('Veuillez sélectionner une image valide.');
                        return;
                    }

                    // Validation de la taille (5MB max)
                    if (file.size > 5 * 1024 * 1024) {
                        alert('L\'image ne doit pas dépasser 5MB.');
                        return;
                    }

                    // Aperçu de l'image
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewContainer.innerHTML = `
                            <img src="${e.target.result}" alt="Preview" class="image-preview w-full rounded-lg mb-3">
                            <button type="button" id="change-image" class="text-blue-600 hover:text-blue-800 text-sm">
                                Changer l'image
                            </button>
                        `;
                        
                        // Réattacher l'événement au nouveau bouton
                        document.getElementById('change-image').addEventListener('click', function(e) {
                            e.stopPropagation();
                            fileInput.click();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            }

            // Soumission du formulaire
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                // S'assurer que le contenu de l'éditeur est synchronisé
                if (window.editor) {
                    document.getElementById('content').value = window.editor.getData();
                }

                // Validation basique
                const title = document.getElementById('title').value.trim();
                const content = document.getElementById('content').value.trim();
                
                if (!title || !content) {
                    e.preventDefault();
                    alert('Veuillez remplir tous les champs obligatoires.');
                    return;
                }
            });
        });
    </script>
</body>
</html>