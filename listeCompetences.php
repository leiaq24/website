
<?php
$competences = [
    'realiser' => [
        'titre' => 'Réaliser',
        'description' => 'Développer, c’est-à-dire concevoir, coder, tester et intégrer une solution informatique pour un client.',
        'situations_professionnelles' => [
            'Élaborer une application informatique',
            'Faire évoluer une application informatique',
            'Maintenir en conditions opérationnelles une application informatique',
        ],
        'niveaux' => [
            'Développer des applications informatiques simples',
            'Partir des exigences et aller jusqu’à une application complète',
        ],
        'apprentissages_critiques_1' => [
            '★ AC11.01 | Implémenter des conceptions simples',
            '★ AC11.02 | Élaborer des conceptions simples',
            '★ AC11.03 | Faire des essais et évaluer leurs résultats en regard des spécifications',
            '★ AC11.04 | Développer des interfaces utilisateurs',
        ],
        'apprentissages_critiques_2' => [
            '★ AC21.01 | Élaborer et implémenter les spécifications fonctionnelles et non fonctionnelles à partir des exigences',
            '★ AC21.02 | Appliquer des principes d’accessibilité et d’ergonomie',
            '★ AC21.03 | Adopter de bonnes pratiques de conception et de programmation',
            '★ AC21.04 | Vérifier et valider la qualité de l’application par les tests',
        ],
    ],

    'optimiser' => [
        'titre' => 'Optimiser',
        'description' => 'Proposer des applications informatiques optimisées en fonction de critères spécifiques : temps d’exécution, précision, consommation de ressources..',
        'situations_professionnelles' => [
            'Améliorer les performances des programmes dans des contextes contraints',
            'Limiter l’impact environnemental d’une application informatique',
            'Mettre en place des applications informatiques adaptées et efficaces',
        ],
        'niveaux' => [
            'Appréhender et construire des algorithmes',
            'Sélectionner les algorithmes adéquats pour répondre à un problème donné',
        ],
        'apprentissages_critiques_1' => [
            '★ AC12.01 | Analyser un problème avec méthode (découpage en éléments algorithmiques simples, structure de données...)',
            '★ AC12.02 | Comparer des algorithmes pour des problèmes classiques (tris simples, recherche...)',
            '★ AC12.03 | Formaliser et mettre en œuvre des outils mathématiques pour l’informatique',
        ],
        'apprentissages_critiques_2' => [
            '★ AC22.01 | Choisir des structures de données complexes adaptées au problème',
            '★ AC22.02 | Utiliser des techniques algorithmiques adaptées pour des problèmes complexes (par ex. recherche opérationnelle, méthodes arborescentes, optimisation globale, intelligence artificielle...)',
            '★ AC22.03 | Comprendre les enjeux et moyens de sécurisation des données et du code',
            '★ AC22.04 | Évaluer l’impact environnemental et sociétal des solutions proposées',
        ],
    ],

    'administer' => [
        'titre' => 'Administrer',
        'description' => 'Installer, configurer, mettre à disposition, maintenir en conditions opérationnelles des infrastructures, des services et des réseaux et optimiser le système informatique d’une organisation',
        'situations_professionnelles' => [
            'Déployer une nouvelle architecture technique',
            'Améliorer une infrastructure existante',
            'Sécuriser les applications et les services',
        ],
        'niveaux' => [
            'Installer et configurer un poste de travail',
            'Déployer des services dans une architecture réseau',
        ],
        'apprentissages_critiques_1' => [
            '★ AC13.01 | Identifier les différents composants (matériels et logiciels) d’un système numérique',
            '★ AC13.02 | Utiliser les fonctionnalités de base d’un système multitâches / multiutilisateurs',
            '★ AC13.03 | Installer et configurer un système d’exploitation et des outils de développement',
            '★ AC13.04 | Configurer un poste de travail dans un réseau d’entreprise',
        ],
        'apprentissages_critiques_2' => [
            '★ AC23.01 | Concevoir et développer des applications communicantes',
            '★ AC23.02 | Utiliser des serveurs et des services réseaux virtualisés',
            '★ AC23.03 | Sécuriser les services et données d’un système',
        ],
    ],

    'gerer' => [
        'titre' => 'Gérer',
        'description' => 'Concevoir, gérer, administrer et exploiter les données de l’entreprise et mettre à disposition toutes les informations pour un bon pilotage de l’entreprise',
        'situations_professionnelles' => [
            'Lancer un nouveau projet',
            'Sécuriser des données',
            'Exploiter des données pour la prise de décisions',
        ],
        'niveaux' => [
            'Identifier les besoins métiers des clients et des utilisateurs',
            'Appliquer une démarche de suivi de projet en fonction des besoins métiers des clients et des utilisateurs',
            'Participer à la conception et à la mise en œuvre d’un projet système d’information'
        ],
        'apprentissages_critiques_1' => [
            '★ AC14.01 | Mettre à jour et interroger une base de données relationnelle (en requêtes directes ou à travers une application)',
            '★ AC14.02 | Visualiser des données',
            '★ AC14.03 | Concevoir une base de données relationnelle à partir d’un cahier des charges',
        ],
        'apprentissages_critiques_2' => [
            '★ AC24.01 | Optimiser les modèles de données de l’entreprise',
            '★ AC24.02 | Assurer la sécurité des données (intégrité et confidentialité)',
            '★ AC24.03 | Organiser la restitution de données à travers la programmation et la visualisation',
            '★ AC24.04 | Manipuler des données hétérogènes',
        ],
        'apprentissages_critiques_3' => [
            '★ AC34.01 | Capturer et stocker des ensembles volumineux et complexes de données hétérogènes',
            '★ AC34.02 | Préparer et extraire les données pour l’exploitation',
            '★ AC34.03 | Appliquer des méthodes d’exploration et d’exploitation des données (apprentissage, informatique décisionnelle ou fouille de données)',
            '★ AC34.04 | Mettre en production et optimiser le système de gestion de données de l’entreprise',

        ]

    ],

    'conduire' => [
        'titre' => 'Conduire',
        'description' => 'Satisfaire les besoins des utilisateurs au regard de la chaîne de valeur du client, organiser et piloter un projet informatique avec des méthodes classiques ou agile',
        'situations_professionnelles' => [
            'Lancer un nouveau projet',
            'Piloter le maintien d’un projet en condition opérationnelle',
            'Faire évoluer un système d’information',
        ],
        'niveaux' => [
            'Concevoir et mettre en place une base de données à partir d’un cahier des charges client',
            'Optimiser une base de données, interagir avec une application et mettre en œuvre la sécurité',
            'Administrer une base de données, concevoir et réaliser des systèmes d’informations décisionnels'
        ],
        'apprentissages_critiques_1' => [
            '★ AC15.01 | Appréhender les besoins du client et de l’utilisateur',
            '★ AC15.02 | Mettre en place les outils de gestion de projet',
            '★ AC15.03 | Identifier les acteurs et les différentes phases d’un cycle de développement',
        ],
        'apprentissages_critiques_2' => [
            '★ AC25.01 | Identifier les processus présents dans une organisation en vue d’améliorer les systèmes d’information',
            '★ AC25.02 | Formaliser les besoins du client et de l’utilisateur',
            '★ AC25.03 | Identifier les critères de faisabilité d’un projet informatique',
            '★ AC25.04 | Définir et mettre en œuvre une démarche de suivi de projet',
        ],
        'apprentissages_critiques_3' => [
            '★ AC35.01 | Mesurer les impacts économiques, sociétaux et technologiques d’un projet informatique',
            '★ AC35.02 | Savoir intégrer un projet informatique dans le système d’information d’une organisation',
            '★ AC35.03 | Savoir adapter un système d’information',

        ]

    ],
    'collaborer' => [
        'titre' => 'Collaborer',
        'description' => 'Acquérir, développer et exploiter les aptitudes nécessaires pour travailler efficacement dans une équipe informatique',
        'situations_professionnelles' => [
            'Lancer un nouveau projet',
            'Organiser son travail en relation avec celui de son équipe',
            'Élaborer, gérer et transmettre de l’information',
        ],
        'niveaux' => [
            'Identifier ses aptitudes pour travailler dans une équipe',
            'Situer son rôle et ses missions au sein d’une équipe informatique',
            'Manager une équipe informatique',
        ],
        'apprentissages_critiques_1' => [
            '★ AC16.01 | Appréhender l’écosystème numérique',
            '★ AC16.02 | Découvrir les aptitudes requises selon les différents secteurs informatiques',
            '★ AC16.03 | Identifier les statuts, les fonctions et les rôles de chaque membre d’une équipe pluridisciplinaire',
            '★ AC16.04 | Acquérir les compétences interpersonnelles pour travailler en équipe',
        ],
        'apprentissages_critiques_2' => [
            '★ AC26.01 | Comprendre la diversité, la structure et la dimension de l’informatique dans une organisation (ESN, DSI,...)',
            '★ AC26.02 | Appliquer une démarche pour intégrer une équipe informatique au sein d’une organisation',
            '★ AC26.03 | Mobiliser les compétences interpersonnelles pour travailler dans une équipe informatique',
            '★ AC26.04 | Rendre compte de son activité professionnelle',
        ],
        'apprentissages_critiques_3' => [
            '★ AC36.01 | Organiser et partager une veille technologique et informationnelle',
            '★ AC36.02 | Identifier les enjeux de l’économie de l’innovation numérique',
            '★ AC36.03 | Guider la conduite du changement informatique au sein d’une organisation',
            '★ AC36.04 | Accompagner le management de projet informatique',

        ]

    ]
];
?>
