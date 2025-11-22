<?php require_once('header.php');
require_once('listeCompetences.php');
require_once('listeProjets.php'); 

$id = $_GET['id'] ?? null;

if ($id && isset($competences[$id])) {

    $competence = $competences[$id];
?>

<main class="competence-details">
    <h2><?= htmlspecialchars($competence['titre']) ?></h2>
    <p><?= htmlspecialchars($competence['description']) ?></p>

    <h3>Apprentissages critiques</h3>

    <div class="levels">
        <div class="level-card">
            <h3>Niveau 1</h3>
            <p><?= htmlspecialchars($competence['niveaux'][0]) ?></p>
            <?php foreach ($competence['apprentissages_critiques_1'] as $ac): ?>
                <p><?= htmlspecialchars($ac) ?></p>
            <?php endforeach; ?>
        </div>

        <div class="level-card">
            <h3>Niveau 2</h3>
            <p><?= htmlspecialchars($competence['niveaux'][1]) ?></p>
            <?php foreach ($competence['apprentissages_critiques_2'] as $ac): ?>
                <p><?= htmlspecialchars($ac) ?></p>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($competence['niveaux'][2])): ?>
        <div class="level-card">
            <h3>Niveau 3</h3>
            <p><?= htmlspecialchars($competence['niveaux'][2]) ?></p>
            <?php foreach ($competence['apprentissages_critiques_3'] as $ac): ?>
                <p><?= htmlspecialchars($ac) ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <h3>Projets utilisant cette compétence</h3>
    <ul class="project-list">
        <?php foreach ($projets as $cle => $projet): ?>
            <?php if (in_array($id, $projet['competences'])): ?>
                <li>
                    <a href="projet.php?id=<?= htmlspecialchars($cle) ?>">
                        <?= htmlspecialchars($projet['titre']) ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <br><br>
    <a href="apropos.php#portfolio" class="retour">⬅ Retour aux projets</a>
</main>

<?php
    require_once('footer.php');
    exit;
}
?>
