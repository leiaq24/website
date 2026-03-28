<?php require_once('header.php'); ?>

<main>

  <section class="hero">
    <div class="hero-text">
      <p class="hero-tag">Étudiante en BUT Informatique • Orientation data</p>
      <h1>Bonjour, je suis Leia</h1>
      <p class="hero-subtitle">
        Passionnée par le développement web, la création de projets numériques
        et l’univers de la donnée, je suis actuellement à la recherche d’une alternance
        dans le domaine de la data.
      </p>

      <div class="hero-buttons">
        <a href="apropos.php" class="cta">En savoir plus</a>
        <a href="apropos.php#portfolio" class="cta cta-secondary">Voir mes projets</a>
      </div>
    </div>

  </section>

  <section class="home-about">
    <div class="home-about-text">
      <h2>Un portfolio pour présenter mon univers</h2>
      <p>
        Sur ce site, vous trouverez une présentation de mon parcours,
        un aperçu de mes projets en informatique ainsi que les domaines
        qui m’intéressent le plus : le web, la programmation et la data.
      </p>
      <p>
        J’aime créer des interfaces agréables, apprendre de nouvelles technologies
        et explorer des projets mêlant logique, créativité et analyse.
      </p>
    </div>
  </section>

  <section class="home-skills">
    <h2>Ce que j’aime développer</h2>
    <div class="skills-grid">
      <div class="skill-card">
        <h3>Analyse de données</h3>
        <p>Explorer, structurer et valoriser les données avec des outils adaptés.</p>
      </div>
      <div class="skill-card">
        <h3>Développement web</h3>
        <p>Créer des sites clairs, modernes et agréables à utiliser.</p>
      </div>

      <div class="skill-card">
        <h3>Programmation</h3>
        <p>Concevoir des applications et résoudre des problèmes avec méthode.</p>
      </div>
    </div>
  </section>

  <section class="featured-projects">
    <h2>Quelques projets à découvrir</h2>

    <div class="projects-preview-grid">
      <div class="project-preview-card">
        <a href="projet.php?id=charlotte" class="project-link">
          <img src="img/charlotte1.png" alt="Jeu Charlotte aux grenades">
          <h3>Charlotte aux grenades</h3>
          <p>Un jeu développé en Python avec Pygame dans le cadre d’un projet créatif.</p>
        </a>
      </div>

      <div class="project-preview-card">
        <a href="projet.php?id=powerbi" class="project-link">
          <img src="img/powerBI1.png" alt="Projet Power BI">
          <h3>Analyse & visualisation de données</h3>
          <p>Un tableau de bord conçu pour mettre en valeur des données de façon claire et pertinente.</p>
        </a>
      </div>

      <div class="project-preview-card">
        <a href="projet.php?id=blog" class="project-link">
          <img src="img/blog.png" alt="Blog PHP">
          <h3>Blog en PHP</h3>
          <p>Un projet web dynamique permettant de travailler la structure, le design et la logique côté serveur.</p>
        </a>
      </div>
    </div>

    <div class="center-button">
      <a href="apropos.php#portfolio" class="cta">Voir tous mes projets</a>
    </div>
  </section>


  <section class="preview-contact">
    <h2>Envie d’échanger ?</h2>
    <p>
      Que ce soit pour discuter de mon profil, de mes projets ou d’une opportunité de stage,
      n’hésitez pas à me contacter.
    </p>
    <a href="contact.php" class="cta-tertiary">Me contacter</a>
  </section>

</main>

<?php require_once('footer.php'); ?>