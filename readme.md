# Structure du Projet (MVC)

```
/projet-mvc-php
│── public/                # Dossier public accessible par le navigateur
│   ├── index.php          # Point d'entrée principal
│   ├── .htaccess          # Réécriture d'URL et sécurité
│   ├── assets/            # Fichiers CSS, JS, images
│
│── app/                   # Code de l'application
│   ├── controllers/       # Contrôleurs
│   │   ├── front/         # Front Office
│   │   │   ├── HomeController.php
│   │   │   ├── ArticleController.php
│   │   ├── back/          # Back Office (Admin)
│   │   │   ├── DashboardController.php
│   │   │   ├── UserController.php
│   ├── models/            # Modèles (Gestion de la base de données)
│   │   ├── User.php
│   │   ├── Article.php
│   ├── views/             # Fichiers templates Twig
│   │   ├── front/         # Vues du Front Office
│   │   │   ├── home.twig
│   │   │   ├── article.twig
│   │   ├── back/          # Vues du Back Office (Admin)
│   │   │   ├── dashboard.twig
│   │   │   ├── users.twig
│   ├── core/              # Classes principales
│   │   ├── Router.php     # Gestion des routes
│   │   ├── Controller.php # Classe parent pour les contrôleurs
│   │   ├── Model.php      # Classe parent pour les modèles
│   │   ├── View.php       # Gestion des templates Twig
│   │   ├── Database.php   # Connexion PostgreSQL via PDO
│   │   ├── Auth.php       # Gestion des sessions et authentification
│   │   ├── Validator.php  # Validation des données
│   │   ├── Security.php   # Sécurisation CSRF, XSS, SQL Injection
│   │   ├── Session.php    # Gestion avancée des sessions
│   ├── config/            # Configuration
│   │   ├── config.php     # Configuration de la base de données
│   │   ├── routes.php     # Définition des routes
│
│── logs/                  # Logs d'erreurs et d’accès
│── vendor/                # Dépendances (Composer)
│── .env                   # Variables d’environnement
│── composer.json          # Gestionnaire de dépendances PHP
│── .gitignore             # Fichiers ignorés par Git

```


<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [QSA,L]
</IfModule>

# Désactiver l'exécution des fichiers PHP dans uploads
<Directory "/uploads">
    php_flag engine off
</Directory>