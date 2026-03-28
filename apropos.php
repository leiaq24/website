<?php require_once('header.php'); ?>

<main>
    <section class="apropos">
        <div class="presentation">
            <img src="img/leia.jpg" alt="Photo de Leia" />
            <div class="texte">
                <p>Bonjour ! Je m'appelle <strong>Leia</strong>, j’ai 20 ans et j’étudie actuellement l’informatique
                    au <strong>BUT Informatique de La Doua à Lyon</strong>.</p>
                <p>J’aime coder et je me débrouille plutôt bien ! À l’avenir, j’aimerais me spécialiser dans
                    <strong>la gestion de données</strong>, et mon objectif est de devenir <strong>data analyst</strong> 📊.
                </p>
                <p>Au-delà de la tech, j’ai une grande passion pour tout ce qui est artistique — musique, cinéma, photographie, dessin, littérature... Je suis aussi fan de jeux vidéo cozy comme <em>Animal Crossing</em> 🐶</p>
                <p>Pendant mon temps libre, j’aime explorer de nouveaux loisirs et apprendre de nouvelles choses. J’adore relever des défis, que ce soit coder un nouveau projet ou plonger dans un nouveau livre.</p>
                <p>N’hésitez pas à jeter un œil à mes projets ci-dessous, et contactez-moi si vous as des questions ou juste envie de discuter !</p>
                <p>Merci de votre visite sur ma page ! 🌸</p>
            </div>
        </div>

        <a href="docs/CV_Leia_Quilichini.pdf" target="_blank" class="cta-secondary">
            Voir mon CV
        </a>

        <a href="docs/CV_Leia_Quilichini.pdf" download class="cta">
            Télécharger mon CV
        </a>

    </section>
    <hr />
    <section class="portfolio" id="portfolio">
        <h2>Mes Projets</h2>
        <div class="projects-grid">

            <div class="project-card">
                <a href="projet.php?id=charlotte" class="project-link">
                    <img src="img/charlotte1.png" alt="Jeu Charlotte aux grenades" />
                    <h3>Charlotte aux grenades</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=java" class="project-link">
                    <img src="img/carte.png" alt="Carte" />
                    <h3>Application Java</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=powerbi" class="project-link">
                    <img src="img/powerBI1.png" alt="Extrait tableau de bord PowerBI" />
                    <h3>Analyse & Visualisation de données</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=bd" class="project-link">
                    <img src="img/bd.png" alt="Capture écran BD" />
                    <h3>Conception et Implémentation de base de données</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=blog" class="project-link">
                    <img src="img/blog.png" alt="Blog" />
                    <h3>Blog en PHP</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=beatfriends" class="project-link">
                    <img src="img/beatfriends1.png" alt="Page accueil" />
                    <h3>Réseau social musical</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=azure" class="project-link">
                    <img src="img/azure1.png" alt="azure" />
                    <h3>Azure</h3>
                </a>
            </div>
            

            <div class="project-card">
                <a href="projet.php?id=symfony" class="project-link">
                    <img src="img/symfony1.png" alt="symfony" />
                    <h3>Symfony</h3>
                </a>
            </div>

            <div class="project-card">
                <a href="projet.php?id=mission1" class="project-link">
                    <img src="img/mission.png" alt="mission" />
                    <h3>mission de stage</h3>
                </a>
            </div>


        </div>
        <br>
    </section>
    <hr />
    <section class="experience">
        <h2>Formation & Expérience</h2>
        <div class="timeline">

            <div class="timeline-item">
                <h3>BUT Informatique – Université Lyon1, site de la Doua</h3>
                <span class="timeline-date">2024 – aujourd’hui</span>
                <p>Études en informatique avec un focus sur la donnée, le développement logiciel et les technologies web.</p>
            </div>

            <div class="timeline-item">
                <h3>TUMO Lyon – Ateliers de création numérique</h3>
                <span class="timeline-date">2023 – 2024</span>
                <p>Participation hebdomadaire à des sessions en autonomie pour explorer différents domaines de la création numérique. Je me suis concentrée sur :
                <ul>
                    <li><strong>Production musicale</strong> – initiation à Logic Pro 🎧</li>
                    <li><strong>Robotique</strong> – découverte des capteurs et de la programmation physique avec Lego Spike</li>
                    <li><strong>Programmation</strong> – approfondissement de mes connaissances en Python 🐍</li>
                </ul>
                </p>
            </div>

            <div class="timeline-item">
                <h3>Girls Can Code! – Bootcamp Python</h3>
                <span class="timeline-date">Été 2023</span>
                <p>Programme intensif d’une semaine dédié aux jeunes femmes dans la tech. J’ai renforcé mes compétences en Python en développant :
                <ul>
                    <li>Un mini-jeu avec une carte Micro:bit</li>
                    <li>“Charlotte aux grenades” – un jeu arcade en vue de coté réalisé avec Pygame</li>
                </ul>
                </p>
            </div>

            <div class="timeline-item">
                <h3>Baccalauréat Général – Filière Scientifique</h3>
                <span class="timeline-date">2021 – 2024</span>
                <p>Obtenu avec mention bien. <br>
                    Spécialités : <strong>mathématiques</strong> et <strong>numérique et sciences informatiques (NSI)</strong>, <br>
                    avec sciences de l’ingénieur en première année.</p>
            </div>

        </div>
    </section>


</main>



<?php require_once('footer.php'); ?>