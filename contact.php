<?php require_once('header.php'); ?>

<main>
    <section class="contact-form">
        <form id="contactForm" action="https://formspree.io/f/mdkzrdlb" method="POST">
            <label for="name">nom :</label>
            <input type="text" id="name" name="name" required />

            <label for="email">email :</label>
            <input type="email" id="email" name="email" required />

            <label for="message">message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">envoyer</button>
        </form>

        <div id="confirmation-container" style="display:none; text-align:center; margin-top: 1em;">
            <p id="confirmation" style="color: green; font-weight: bold;">
                Merci pour votre message, je vous répondrai rapidement !
            </p>

            <button id="backHomeBtn"
                style="margin-top: 1em; border-radius: 25px; padding: 0.5em 1.5em; cursor:pointer;">
                <a href="index.php" style="text-decoration:none; color: inherit;">Retour à l'accueil</a>
            </button>
        </div>

        <script>
            const form = document.getElementById('contactForm');
            const confirmationContainer = document.getElementById('confirmation-container');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const data = new FormData(form);

                fetch(form.action, {
                    method: form.method,
                    body: data,
                    headers: {
                        'Accept': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        form.style.display = 'none';
                        confirmationContainer.style.display = 'block';
                    } else {
                        alert('Oups, il y a eu un problème lors de l’envoi.');
                    }
                }).catch(() => {
                    alert('Erreur réseau, veuillez réessayer.');
                });
            });
        </script>
    </section>
</main>
