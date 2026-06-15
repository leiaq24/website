<?php require_once('header.php'); ?>

<main>
  <section class="hero">
    <div class="hero-text">
      <p class="hero-tag">Étudiante en BUT Informatique • Orientation data</p>
      <h1>Bonjour, je suis Leia</h1>
      <p class="hero-subtitle">
        Intéressée par l'analyse et la visualisation de données, je rejoins Securitas Technology en alternance pour ma troisième année de BUT Informatique
      </p>

      <div class="hero-buttons">
        <a href="apropos.php" class="cta">En savoir plus</a>
        <a href="apropos.php#portfolio" class="cta cta-secondary">Voir mes projets</a>
      </div>
    </div>

  </section>

  <section class="home-skills">
    <h2>Ce que j’aime faire</h2>
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
    <h2>Quelques projets</h2>

    <div class="projects-preview-grid">

      <div class="project-preview-card">
        <a href="projet.php?id=powerbi" class="project-link">
          <img src="img/powerBI1.jpg" alt="Projet Power BI">
          <h3>Analyse & visualisation de données</h3>
          <p>Un tableau de bord conçu pour mettre en valeur des données de façon claire et pertinente</p>
        </a>
      </div>

      <div class="project-preview-card">
        <a href="projet.php?id=ceva" class="project-link">
          <img src="img/ceva.png" alt="CEVA Logistics">
          <h3>CEVA Logistics</h3>
          <p>Stage de 2 mois en tant que Data Analyst QHSE</p>
        </a>
      </div>

      <div class="project-preview-card">
        <a href="projet.php?id=symfony" class="project-link">
          <img src="img/symfony1.png" alt="Blog PHP Symfony">
          <h3>Blog en PHP Symfony</h3>
          <p>Un projet web dynamique permettant de travailler la structure, le design et la logique Symfony</p>
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
      Que ce soit pour discuter de mon profil, de mes projets ou d’une opportunité d'alternace,
      n’hésitez pas à me contacter.
    </p>
    <a href="contact.php" class="cta-tertiary">Me contacter</a>
  </section>
</main>