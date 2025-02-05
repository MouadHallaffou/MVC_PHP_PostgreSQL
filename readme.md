
## Structure du Projet

```
/PROJET-MVC-PHP
├── app/                       # Code de l'application
│   ├── config/                # Configuration de l'application
│       └── Database.php       # Fichier pour la connexion à la base de données
│   ├── controllers/           # Contrôleurs (logique métier)
│       ├── back/              # Contrôleurs pour le Back Office
│           ├── DashboardController.php
│           └── UserController.php
│       ├── front/             # Contrôleurs pour le Front Office
│           └── ArticleController.php
│   ├── core/                  # Classes principales de l'application
│       ├── Auth.php           # Gestion de l'authentification
│       ├── Controller.php     # Classe parent pour les contrôleurs
│       ├── Model.php          # Classe parent pour les modèles
│       ├── Router.php         # Gestion des routes
│       ├── Security.php       # Sécurisation des requêtes
│       ├── Session.php        # Gestion des sessions
│       ├── Validator.php      # Validation des données
│       └── View.php           # Gestion des vues
│   ├── models/                # Modèles (gestion des données)
│       ├── Article.php
│       └── User.php
│   ├── views/                 # Templates pour les vues
│       ├── back/              # Vues pour le Back Office
│           ├── dashboard.twig
│           └── users.twig
│       ├── front/             # Vues pour le Front Office
│           ├── article.twig
│           └── home.twig
│       └── templates/         # Templates réutilisables
│           ├── layout.twig
│           ├── footer.twig
│           └── navbar.twig
├── public/                    # Dossier public (accessible via le navigateur)
│   ├── assets/                # Fichiers CSS, JS, images
│   │   ├── css/
│   │   ├── images/
│   │   └── js/
│   ├── uploads/               # Fichiers uploadés par l'utilisateur
│   ├── .htaccess              # Réécriture d'URL et sécurité
│   └── index.php              # Point d'entrée de l'application
├── vendor/                    # Dépendances (si utilisation de Composer)
├── .env                       # Variables d’environnement
├── .gitignore                 # Fichiers à ignorer par Git
├── composer.json              # Fichier de gestion des dépendances
├── composer.lock              # Fichier bloquant les versions des dépendances
└── readme.md                  # Documentation du projet
```

## Installation

1. Clonez le repository :
   ```bash
   git clone 
   ```
   
2. Accédez au dossier du projet :
   ```bash
   cd PROJET-MVC-PHP
   ```

3. Installez les dépendances :
   ```bash
   composer install
   ```

4. Modifiez le fichier `.env` pour configurer vos variables d’environnement, y compris les détails de la base de données.

## Utilisation

- Accédez à l'application via votre navigateur à l'adresse : `http://localhost/PROJET-MVC-PHP/public/`

## Aide

Pour plus d'informations, référez-vous à la documentation dans ce fichier. N'hésitez pas à ouvrir une issue si vous rencontrez des problèmes.

```
