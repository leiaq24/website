<?php require_once('header.php');
require_once('listeProjets.php');
require_once('listeCompetences.php');



$id = $_GET['id'] ?? null;

if (!$id || !isset($projets[$id])) {
    echo "<h2>Projet introuvable</h2>";
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
    <p><?= htmlspecialchars($projet['realisation']) ?></p>


    <section class="competences-projet">
        <h4>Compétences mises en œuvre</h4>
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




    <br><br>
    <a href="apropos.php#portfolio" class ="retour">⬅ Retour aux projets</a>
</main>


<?php require_once('footer.php'); ?>