<?php require_once('header.php');
require_once('listeProjets.php');
require_once('listeCompetences.php');

$id = $_GET['id'] ?? null;

if (!$id || !isset($projets[$id])) {
    echo "<main class='projet-details'><h2>Projet introuvable</h2></main>";
    require_once('footer.php');
    exit;
}

$projet = $projets[$id];
?>

<main class="projet-details">

    <section class="projet-hero">
        <h2><?= htmlspecialchars($projet['titre']) ?></h2>
        <a href="apropos.php#portfolio" class="retour">⬅ Retour aux projets</a>
    </section>

    <section class="projet-contenu">
        <div class="gallery">
            <?php foreach (array_slice($projet['images'], 1) as $img): ?>
                
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>" class="project-image" />
            <?php endforeach; ?>
        </div>

        <div class="projet-textes">

            <h3>Description</h3>
            <p><?= htmlspecialchars($projet['description']) ?></p>



            <h3>Détails</h3>
            <p><?= htmlspecialchars($projet['details']) ?></p>



            <h3>Réalisation</h3>
            <p><?= htmlspecialchars($projet['realisation']) ?></p>

        </div>
    </section>

    <section class="competences-projet">
        <h3>Compétences mises en œuvre</h3>
        <ul>
            <?php foreach ($projet['competences'] as $comp): ?>
                <li>
                    <a href="competence.php?id=<?= htmlspecialchars($comp) ?>">
                        <?= htmlspecialchars($competences[$comp]['titre']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</main>

