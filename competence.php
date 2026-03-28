<?php require_once('header.php');
require_once('listeCompetences.php');
require_once('listeProjets.php'); 

$id = $_GET['id'] ?? null;

if ($id && isset($competences[$id])) {

    $competence = $competences[$id];
?>

<main class="competence-details">

    <section class="competence-hero">
        <h2><?= htmlspecialchars($competence['titre']) ?></h2>
        <p class="competence-intro"><?= htmlspecialchars($competence['description']) ?></p>
    </section>

    <section class="competence-apprentissages">
        <h3>Apprentissages critiques</h3>

        <div class="levels">
            <div class="level-card">
                <h4>Niveau 1</h4>
                <p class="niveau-description"><?= htmlspecialchars($competence['niveaux'][0]) ?></p>

                <ul>
                    <?php foreach ($competence['apprentissages_critiques_1'] as $ac): ?>
                        <li><?= htmlspecialchars($ac) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="level-card">
                <h4>Niveau 2</h4>
                <p class="niveau-description"><?= htmlspecialchars($competence['niveaux'][1]) ?></p>

                <ul>
                    <?php foreach ($competence['apprentissages_critiques_2'] as $ac): ?>
                        <li><?= htmlspecialchars($ac) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php if (!empty($competence['niveaux'][2])): ?>
            <div class="level-card">
                <h4>Niveau 3</h4>
                <p class="niveau-description"><?= htmlspecialchars($competence['niveaux'][2]) ?></p>

                <ul>
                    <?php foreach ($competence['apprentissages_critiques_3'] as $ac): ?>
                        <li><?= htmlspecialchars($ac) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="competence-projets-lies">
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
    </section>

    <a href="apropos.php#portfolio" class="retour">⬅ Retour aux projets</a>
</main>

<?php
    require_once('footer.php');
    exit;
}
?>