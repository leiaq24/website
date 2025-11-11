<?php
require_once('header.php');

// Tableau associatif des projets
$projets = [
    'charlotte' => [
        'titre' => 'Charlotte aux grenades',
        'images' => [
            'img/charlotte1.png',
            'img/charlotte2.png',
        ],
        'description' => "Un jeu de plateforme réalisé avec Python et Pygame, inspiré du style graphique de jeux comme Mario Bros.",
        'details' => "Tu joues Charlotte, qui doit collecter des fruits-grenades pour marquer des points 🍓, mais attention aux bombes-grenades 💣… un seul contact et c’est l’explosion !",
    ],
    'java' => [
        'titre' => 'Application Java',
        'images' => [
            'img/carte.png',
        ],
        'description' => "Dans le cadre de la Fête des Lumières, le but était d’optimiser les trajets des touristes souhaitant réduire leur temps de déplacement entre les différents lieux à visiter.",
        'details' => "Développement en Java Swing et utilisation d’algorithmes de graphes..."
    ],
    'powerbi' => [
        'titre' => 'Analyse & Visualisation de données',
        'images' => [
            'img/powerBI1.png',
            'img/powerBI2.png',
            'img/powerBI3.png'
        ],
        'description' => "Création de tableaux de bord Power BI pour l’entreprise fictive Adventure Works Cycles.",
        'details' => "Visualisations interactives pour suivre ventes, clients clés, coûts, etc.<br>Présentation orale finale avec démonstration en direct"
    ],
    'bd' => [
        'titre' => 'Conception et Implémentation de base de données',
        'images' => [
            'img/bd.png',
        ],
        'description' => "Réalisation des Modèles Conceptuel et Physique de Données (Oracle) avec PowerAMC",
        'details' => "Implémentation SQL Oracle avec contraintes et données réalistes<br>Requêtes complexes : suivi projet, participation étudiants, finances"
    ],
    'blog' => [
        'titre' => "Création d'un blog",
        'images' => [
            'img/blog.png',
        ],
        'description' => "Un mini-blog web développé en PHP, conçu pour gérer des articles, des utilisateurs et des commentaires.",
        'details' => "Tu peux créer ton compte, publier des articles 📝, consulter ceux des autres et ajouter des commentaires 💬",
    ],
    'beatfriends' => [
        'titre' => 'Réseau social musical',
        'images' => [
            'img/beatfriends1.png',
            'img/beatfriends2.png',
            'img/beatfriends3.png',
        ],
        'description' => "Un réseau social dédié aux amateurs de musique, développé pour partager et découvrir des morceaux.",
        'details' => "Tu peux créer ton profil 🎤, poster tes chansons 🎵, liker et commenter les créations des autres 💬, et suivre tes artistes préférés ⭐. Un espace pour vivre la musique en communauté !"
    ]
];

// Récupération de l’ID depuis l’URL
$id = $_GET['id'] ?? null;

if (!$id || !isset($projets[$id])) {
    echo "<h2>Projet introuvable 😢</h2>";
    require_once('footer.php');
    exit;
}

$projet = $projets[$id];
?>
<main class="projet-details">
    <h2><?= htmlspecialchars($projet['titre']) ?></h2>

    <div class="gallery">
        <?php foreach ($projet['images'] as $img): ?>
            <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>" class="project-image" />
        <?php endforeach; ?>
    </div>

    <p><?= htmlspecialchars($projet['description']) ?></p>
    <p><?= htmlspecialchars($projet['details']) ?></p>

    <br><br>
    <a href="apropos.php#portfolio">⬅ Retour aux projets</a>
</main>


<?php require_once('footer.php'); ?>