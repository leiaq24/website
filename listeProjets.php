<?php $projets = [
    'charlotte' => [
        'titre' => 'Charlotte aux grenades',
        'images' => [
            'img/charlotte.png',
            'img/charlotte1.png',
            'img/charlotte2.png',
        ],
        'details' => "Jeu de plateforme 2D développé en Python avec la librairie Pygame.
        Le personnage de Charlotte est animé grâce à des sprites dédiés 
        (course, saut, chute) intégrés dans un décor à scrolling horizontal.
        Le jeu inclut la gestion des collisions, des événements clavier, un système de score,
        et des objets interactifs (fruits-grenades et bombes-grenades).",
        'description' => "Tu joues Charlotte, qui doit collecter des fruits-grenades 🍓 pour marquer des points, mais attention aux bombes-grenades 💣… un seul contact et c’est l’explosion !",
        'competences' => ['realiser', 'optimiser', 'collaborer'],
        'realisation' => "Projet développé seule dans le cadre du stage Girls Can Code!, avec l'accompagnement de professionnels.",

    ],

    'bd' => [
        'titre' => 'Conception et Implémentation de base de données',
        'images' => [
            'img/bd.jpg',
        ],
        'description' => "Réalisation des Modèles Conceptuel et Physique de Données (Oracle) avec PowerAMC, et implémentation SQL complète avec contraintes et données réalistes.",
        'details' => "Nous avons conçu et implémenté une base de données Oracle pour gérer les projets et la participation des étudiants, incluant contraintes d’intégrité, clés primaires/étrangères et données réalistes. 
    Les requêtes SQL complexes ont permis d’extraire et analyser des informations : suivi des projets, participation des étudiants, gestion financière. 
    L’approche a couvert l’ensemble du cycle : Modèle Conceptuel de Données (MCD), Modèle Logique de Données (MLD) et implémentation physique.",
        'competences' => ['realiser', 'optimiser'],
        'realisation' => "Projet réalisé par une équipe de 2 étudiants dans le cadre du BUT Informatique (semestre 1).",
    ],

    'java' => [
        'titre' => 'Application Java',
        'images' => [
            'img/carte.png',
            'img/carte1.png',
            'img/carte2.jpg',
        ],
        'description' => "Dans le cadre de la Fête des Lumières, le but était d’optimiser les trajets des touristes souhaitant réduire leur temps de déplacement entre les différents lieux à visiter.",
        'details' => "Développement d’une application Java Swing permettant d’optimiser les déplacements de touristes pendant la Fête des Lumières grâce à des algorithmes de graphes. L’interface graphique permet de sélectionner les lieux à visiter, de visualiser le chemin le plus court et d’interagir avec la carte. Le projet inclut la modélisation du graphe, l’implémentation de Dijkstra et la gestion des événements de l’interface.",
        'competences' => ['realiser', 'optimiser', 'conduire', 'collaborer'],
        'realisation' => "Projet réalisé par une équipe de 3 étudiants dans le cadre du BUT Informatique (semestre 2)."
    ],

    'powerbi' => [
        'titre' => 'Analyse & Visualisation de données',
        'images' => [
            'img/powerBI1.jpg',
            'img/powerBI2.jpg',
            'img/powerBI3.jpg',
        ],
        'description' => "Création de tableaux de bord Power BI pour l’entreprise fictive Adventure Works Cycles, permettant d’analyser les ventes, les clients clés et les coûts.",
        'details' => "Nous avons conçu et mis en œuvre des tableaux de bord interactifs avec Power BI pour visualiser les ventes, les clients, les coûts et les indicateurs clés. 
    Les données ont été préparées, nettoyées et transformées pour permettre des analyses pertinentes. 
    Le projet s’est conclu par une présentation orale avec démonstration en direct des visualisations et des fonctionnalités des tableaux de bord.",
        'competences' => ['gerer', 'optimiser'],
        'realisation' => "Projet réalisé par une équipe de 2 étudiants dans le cadre du BUT Informatique (semestre 2).",
    ],

    'blog' => [
        'titre' => "Création d'un blog",
        'images' => [
            'img/blog.png',
            'img/blog1.png',
        ],
        'description' => "Un mini-blog web développé en PHP, conçu pour gérer des articles, des utilisateurs et des commentaires.",
        'details' => "Nous avons développé un blog web permettant : la création de comptes utilisateurs, la publication d’articles, la consultation des articles des autres et l’ajout de commentaires. 
    Le projet inclut la gestion de la base de données MySQL, la validation côté serveur, la sécurisation des interactions (connexion, inscription, permissions) et la mise en place d’une interface simple et intuitive.",
        'competences' => ['realiser', 'optimiser'],
        'realisation' => "Projet réalisé par une équipe de 2 étudiants au BUT Informatique (semestre 3).",
    ],

    'beatfriends' => [
        'titre' => 'Réseau social musical',
        'images' => [
            'img/beatfriends.png',
            'img/beatfriends1.png',
            'img/beatfriends2.png',
            'img/beatfriends3.png',
        ],
        'description' => "Un réseau social dédié aux amateurs de musique, développé pour partager et découvrir des morceaux.",
        'details' => "Nous avons conçu et développé une application web permettant aux utilisateurs de créer un profil musical, poster et partager leurs chansons, liker et commenter les créations des autres, et suivre leurs artistes préférés. 
    Le projet inclut la gestion d’utilisateurs et des permissions, la gestion de contenu multimédia, la sécurisation des interactions et une interface web intuitive.
Le projet a été réalisé selon la méthode Agile SCRUM, avec des sprints de 1 à 3 semaines, des réunions régulières, le suivi des tâches et des ajustements continus pour répondre aux besoins des utilisateurs.",
        'competences' => ['realiser', 'optimiser', 'collaborer', 'conduire'],
        'realisation' => "Projet réalisé par une équipe de 3 étudiants au BUT Informatique (semestre 3).",
    ],

    'azure' => [
        'titre' => 'Exploitation de données avec Azure et Power BI',
        'images' => [
            'img/azure1.png',
            'img/azure2.png',
            'img/powerbi7.png',
        ],
        'description' => "Projet de récupération, stockage et visualisation de données issues d’une API publique à l’aide des services Microsoft Azure et Power BI.",
        'details' => "Ce projet consiste à exploiter une API publique afin de collecter des données, les stocker dans le cloud et les analyser visuellement. 
Les données sont récupérées automatiquement via Azure Logic Apps et/ou Azure Functions, puis stockées dans Azure Table Storage avec une organisation adaptée pour faciliter leur exploitation.

Les données collectées sont ensuite connectées à Power BI afin de créer des tableaux de bord interactifs et des visualisations pertinentes (graphiques, tableaux, indicateurs) permettant d’analyser les informations obtenues.

Le projet comprend également une phase de planification avec la conception de l’architecture du système (API, services Azure, stockage et connexion avec Power BI) afin de structurer efficacement le flux de données et l’exploitation analytique.",
        'competences' => ['realiser', 'optimiser', 'conduire'],
        'realisation' => "Projet réalisé par une équipe de 2 étudiants au BUT Informatique (semestre 4).",
    ],

    'symfony' => [
        'titre' => 'Blog en PHP Symfony',
        'images' => [
            'img/symfony1.png',
            'img/symfony2.png',
            'img/symfony3.png',
        ],
        'description' => "Développement d’une application web collaborative de gestion de listes de courses avec Symfony.",
        'details' => "Ce projet consiste à développer une application web complète avec le framework Symfony permettant aux utilisateurs de créer, gérer et partager des listes de courses.
L’application intègre un système d’authentification sécurisé (inscription, connexion, gestion de profil) ainsi qu’un espace utilisateur permettant de consulter et organiser ses listes de courses.
Chaque liste contient des articles avec des quantités et un suivi de leur statut (acheté ou non). Les utilisateurs peuvent ajouter, supprimer et modifier les éléments de leurs listes.
Un espace administrateur permet de gérer les articles et leurs catégories via des interfaces CRUD.
Des statistiques sont également calculées automatiquement (total des dépenses, prix moyen des articles, article le plus cher et le moins cher, répartition par type d’article), afin d’apporter une vision claire des dépenses.",
        'competences' => ['realiser', 'collaborer', 'conduire'],
        'realisation' => "Projet réalisé par une équipe de 3 étudiants au BUT Informatique (semestre 4).",
    ],

    'ceva' => [
        'titre' => 'mission stage',
        'images' => [
            'img/ceva.png',
            'img/ceva1.png',
            'img/ceva2.png',
        ],
        'description' => "mission",
        'details' => "mission",
        'competences' => ['realiser'],
        'realisation' => "Projet réalisé lors du stage effectué en fin de 2ème année au BUT Informatique",
    ],

];
