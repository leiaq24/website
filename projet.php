<?php require_once('header.php');
require_once('listeProjets.php');
require_once('listeCompetences.php');

$id = $_GET['id'] ?? null;
if (!$id || !isset($projets[$id])) {
    echo "<main class='projet-details'><h2>Projet introuvable</h2></main>";
    require_once('footer.php');
    exit;
}

$projet  = $projets[$id];
$images  = array_values(array_slice($projet['images'], 1));
?>


<?php
function etoiles(int $note, int $max = 3): string
{
    return str_repeat('★', $note) . str_repeat('☆', $max - $note);
}
?>

<link rel="stylesheet" href="lightbox.css">

<main class="projet-details">

    <section class="projet-hero">
        <h2><?= htmlspecialchars($projet['titre']) ?></h2>
        <a href="apropos.php#portfolio" class="retour">⬅ Retour aux projets</a>
    </section>

    <section class="projet-contenu">
        <div class="gallery">
            <?php foreach ($images as $index => $img): ?>
                <img
                    src="<?= htmlspecialchars($img) ?>"
                    alt="<?= htmlspecialchars($projet['titre']) ?>"
                    class="project-image"
                    data-index="<?= $index ?>"
                    onclick="openLightbox(<?= $index ?>)" />
            <?php endforeach; ?>
        </div>

        <div class="projet-textes">
            <div class="projet-bloc">
                <h3>Description</h3>
                <p><?= nl2br(htmlspecialchars($projet['description'])) ?></p>
            </div>
            <div class="projet-bloc">
                <h3>Détails</h3>
                <p><?= nl2br(htmlspecialchars($projet['details'])) ?></p>
            </div>
            <div class="projet-bloc">
                <h3>Réalisation</h3>
                <p><?= htmlspecialchars($projet['realisation']) ?></p>
            </div>
        </div>
    </section>

    <section class="competences-projet">
        <h3>Compétences mises en œuvre</h3>
        <ul>
            <?php foreach ($projet['competences'] as $index => $comp): ?>
                <li>
                    <a href="competence.php?id=<?= htmlspecialchars($comp) ?>">
                        <?= htmlspecialchars($competences[$comp]['titre']) ?>
                        <?php if (isset($projet['evaluation'][$index])): ?>
                            <?= etoiles(
                                $projet['evaluation'][$index],
                                count($competences[$comp]['niveaux'])
                            ) ?>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</main>

<!-- Lightbox HTML -->
<div id="lightbox" onclick="closeLightboxOnBackdrop(event)">
    <button class="lb-close" onclick="closeLightbox()">✕</button>
    <button class="lb-prev" onclick="changeImage(-1)">&#8249;</button>
    <button class="lb-next" onclick="changeImage(1)">&#8250;</button>
    <div class="lb-content">
        <img id="lb-img" src="" alt="Image agrandie" />
        <p id="lb-counter"></p>
    </div>
</div>

<!-- Passe les images PHP → JS, puis charge le script -->
<script>
    const PROJECT_IMAGES = <?= json_encode($images) ?>;
</script>
<script src="photos.js"></script>
<script>
    initLightbox(PROJECT_IMAGES);
</script>